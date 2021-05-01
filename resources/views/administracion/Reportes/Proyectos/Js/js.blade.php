<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script>
    var fieldsSelected = [];
    var relationsSelected = [];

    function tableTemplate(tableData) {
        return /*html*/`
            <div class="col-4 col-sm-3 border rounded p-2">
                <h5 class="text-center">${tableData.s_tabla}</h5>
                <div class="border rounded px-2" style="max-height: 300px; overflow-y: auto">
                    ${fieldTemplate(tableData.sis_tcampos)}
                </div>
            </div>
        `;
    }

    function fieldTemplate (fieldsData) {
        let template = '';
        $.each(fieldsData, (index, fieldData) => {
            template += /*html*/`<div id="${fieldData.id}" class="rounded" draggable="true" ondragstart="onDragStart(event)" ondragover="onDragOver(event)" ondrop="onDrop(event)" onmouseup="addToFieldsSelected(event)">${fieldData.s_campo}</div>`;
        });
        return template;
    }

    function onDragStart(event) {
        event.dataTransfer.setData('text/plain', event.target.id);
        event.currentTarget.style.border = '1px solid orange';
    }

    function onDragOver(event) {
        event.preventDefault();
    }

    function onDrop(event) {
        event.currentTarget.style.border = '1px solid orange';
        const id = event.dataTransfer.getData('text');
        const relationIndex = relationsSelected.indexOf(`${id}-${event.target.id}`);
        if(event.target.id !== id && relationIndex === -1) {
            relationsSelected.push(`${id}-${event.target.id}`);
            $('input[name=relationsSelected]').val(JSON.stringify(relationsSelected));
            $('#relationsSelected').append(/*html*/`
            <div class="bg-primary rounded-pill d-inline-block px-2 pb-1 m-1" id="relation-${id}-${event.target.id}">
                <span class="mr-2 text-danger" onclick="removeFromRelationsSelected(${id}, ${event.target.id})" style='cursor: pointer;'>x</span>${$(`#${id}`).text()} - ${$(`#${event.target.id}`).text()}
            </div>
            `);
        }
        event.dataTransfer.clearData();
    }

    function removeFromRelationsSelected(id, relatedId) {
        const relationIndex = relationsSelected.indexOf(`${id}-${relatedId}`);
        relationsSelected.splice(relationIndex, 1);
        $('input[name=relationsSelected]').val(JSON.stringify(relationsSelected));
        $(`#relation-${id}-${relatedId}`).remove();
        $(`#${id}`).css('border', 'none');
        $(`#${relatedId}`).css('border', 'none');
    }

    function buildTables() {
        $('#tablesxx').attr('disabled', true);
        $.ajax({
            method: 'POST',
            url: '{{route('excel.getDataFields')}}',
            data: {
                selected: $('#tablesxx').val()
            },
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success(response) {
                $.each(response, (index, table) => {
                    $('#tables').append(tableTemplate(table));
                });
            },
            error(error) {
                $('#tablesxx').attr('disabled', false);
            }
        });
    }

    function destroyTables() {
        $('#tables').empty();
        $('#tablesxx').attr('disabled', false);
        $('#fieldsSelected').empty();
        fieldsSelected = [];
        relationsSelected = [];
        $('input[name=fieldsSelected]').val('')
        $('input[name=relationsSelected]').val('')
    }

    function addToFieldsSelected(event) {
        const fieldIndex = fieldsSelected.indexOf(parseInt(event.target.id));
        if(fieldIndex >= 0){
            $(`#${event.target.id}`).css('background-color', 'white')
            fieldsSelected.splice(fieldIndex, 1);
            $('input[name=fieldsSelected]').val(JSON.stringify(fieldsSelected));
            $(`#field-${event.target.id}`).remove();
        } else {
            fieldsSelected.push(parseInt(event.target.id));
            $('input[name=fieldsSelected]').val(JSON.stringify(fieldsSelected));
            $(`#${event.target.id}`).css('background-color', 'lightgray');
            $('#fieldsSelected').append(/*html*/`
                <div class="bg-primary rounded-pill d-inline-block px-2 pb-1 m-1" id="field-${event.target.id}">
                    <span class="mr-2 text-danger" onclick="removeFromFieldsSelected(${event.target.id})" style='cursor: pointer;'>x</span>${$(`#${event.target.id}`).text()}
                </div>
            `);
        }
    }

    function removeFromFieldsSelected(id) {
        const index = fieldsSelected.indexOf(id);
        fieldsSelected.splice(index, 1);
        $('input[name=fieldsSelected]').val(JSON.stringify(fieldsSelected));
        $(`#field-${id}`).remove();
        $(`#${id}`).css('background-color', 'white');
    }

    $(function() {
        $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4',
        });
    });
</script>
