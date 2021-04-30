<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script>
    var fieldsselected = [];

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
            template += /*html*/`<div id="${fieldData.id}" draggable="true" ondragstart="onDragStart(event)" ondragover="onDragOver(event)" onmouseup="addToFieldsSelected(event)">${fieldData.s_campo}</div>`;
        });
        return template;
    }

    function onDragStart(event) {
        event.dataTransfer.setData('text/plain', event.target.id);
        event.currentTarget.style.backgroundColor = 'yellow';
    }

    function onDragOver(event) {
        event.preventDefault();
    }

    function onDrop(event) {
        const id = event.dataTransfer.getData('text');
        if(event.target.id !== id ) {

        }
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
    }

    function addToFieldsSelected(event) {
        const fieldIndex = fieldsselected.indexOf(event.target.id);
        if(fieldIndex >= 0){
            $(`#${event.target.id}`).css('background-color', 'white')
            fieldsselected.splice(fieldIndex, 1);
            $(`#field-${event.target.id}`).remove();
        } else {
            fieldsselected.push(event.target.id)
            $(`#${event.target.id}`).css('background-color', 'lightgray')
            $('#fieldsSelected').append(/*html*/`
                <div class="bg-primary rounded-pill d-inline-block px-2 pb-1 m-1" id="field-${event.target.id}">
                    <span class="mr-2 text-danger" onclick="removeFromFieldsSelected(${event.target.id})" style='cursor: pointer;'>x</span>${$(`#${event.target.id}`).text()}
                </div>
            `);
        }
    }

    function removeFromFieldsSelected(id) {
        fieldsselected.splice(id, 1);
        $(`#field-${id}`).remove();
        $(`#${id}`).css('background-color', 'white')
    }

    $(function() {
        $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4',
        });
    });
</script>
