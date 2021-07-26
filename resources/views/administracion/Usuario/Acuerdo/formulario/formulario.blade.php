<div class="form-group row">
    <div class="form-group col-md-12">

        <p>Entre el Instituto Distrital Para la Protecci&oacute;n de la ni&ntilde;ez y la juventud -IDIPRON y <strong>
                {{auth()->user()->s_primer_nombre}} {{auth()->user()->s_segundo_nombre}} {{auth()->user()->s_primer_apellido}} {{auth()->user()->s_segundo_apellido}} </strong>
            , de nacionalidad <strong>{{auth()->user()->sis_municipio->sis_departam->sis_pai->s_pais}} </strong> con <strong>{{auth()->user()->prm_tipodocu->nombre}}</strong> No. <strong>{{auth()->user()->s_documento}}</strong> expedida en la ciudad de <strong>{{auth()->user()->sis_municipio->s_municipio}}</strong>, se suscribe el presente Acuerdo de Confidencialidad y de No Divulgaci&oacute;n de la Informaci&oacute;n.</p>

                {!!$todoxxxx['textoxxx']->texto!!}

                <div style="padding-left: 26px; text-align: justify;">
                <p>Entre el Instituto Distrital Para la Protecci&oacute;n de la ni&ntilde;ez y la juventud -IDIPRON y <strong>
                    {{auth()->user()->s_primer_nombre}} {{auth()->user()->s_segundo_nombre}}
                    {{auth()->user()->s_primer_apellido}} {{auth()->user()->s_segundo_apellido}} </strong>
                , de nacionalidad <strong>{{auth()->user()->sis_municipio->sis_departam->sis_pai->s_pais}}
                     </strong> con C.C. <strong>{{auth()->user()->prm_tipodocu->nombre}}</strong> No.
                     <strong>{{auth()->user()->s_documento}}</strong> expedida en la ciudad de
                     <strong>{{auth()->user()->sis_municipio->s_municipio}}</strong>, se suscribe el presente Acuerdo de
                     Confidencialidad y de No Divulgaci&oacute;n de la Informaci&oacute;n.</p>

            <p>
                Se suscribe en la ciudad de {{auth()->user()->sis_municipio->s_municipio}}, el d&iacute;a  {{$todoxxxx['fechfirm'][2]}} de {{$todoxxxx['fechfirm'][1]}} de {{$todoxxxx['fechfirm'][0]}}.
            </p>

         

            <p>
                Nombre: {{auth()->user()->s_primer_nombre}} {{auth()->user()->s_segundo_nombre}} {{auth()->user()->s_primer_apellido}} {{auth()->user()->s_segundo_apellido}}
            </p>

            <p>No. {{auth()->user()->s_documento}}</p>

            <p>Cargo {{auth()->user()->sis_cargo->s_cargo}} 


         
        </div>
    </div>
</div>

