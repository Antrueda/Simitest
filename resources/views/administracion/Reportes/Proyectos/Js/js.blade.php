<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script>
    var index = 0;
    const csrf = document.querySelector('meta[name="csrf-token"]').content;
    function selectorTemplate(title) {
        return /*html*/`
        <div class="form-group col-md-6">
            <label for="campos${index}" class="control-label">${title}</label>
            <select id="campos${index}" class="form-control form-control-sm select2" multiple></select>
        </div>
        `;
    }
    $(function() {
        $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4',
        });
        $('#tablesxx').on('change', () => {
            $.ajax({
                method: 'POST',
                url: '{{route('excel.getDataFields')}}',
                data: {
                    selected: $('#tablesxx').val()
                },
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success(response) {
                    $.each(response, (value, text) => {
                        $('#columnsx').append(new Option(text, value));
                    });
                }
            });
        })
    });
</script>
