<script>
    $(document).ready(function(){
        $('#prm_upi_id').select2({
            language: "es"
        });
        $('#prm_dx_ppal_id').select2({
            language: "es"
        });
        $('#prm_dx_rel_uno_id').select2({
            language: "es"
        });
        $('#prm_dx_rel_dos_id').select2({
            language: "es"
        });
        $('#prm_dx_rel_tres_id').select2({
            language: "es"
        });
        $('#prm_dx_rel_com_id').select2({
            language: "es"
        });
        $('#tratamiento').select2({
            language: "es"
        });
        $('#user_doc1_id').select2({
            language: "es"
        });
    });

    function doc(valor){
        if(valor == 227){
            document.getElementById("prm_sustancia_id").hidden=false;
            document.getElementById("edad").hidden=false;
            document.getElementById("prm_ansiedad_id").hidden=false;
        } else {
            document.getElementById("prm_sustancia_id").hidden=true;
            document.getElementById("prm_sustancia_id").value='';
            document.getElementById("edad").hidden=true;
            document.getElementById("edad").value='';
            document.getElementById("prm_ansiedad_id").hidden=true;
            document.getElementById("prm_ansiedad_id").value='';
        }
    }

    function doc1(valor) {
        if(valor == 227){
            document.getElementById("mari_edad").hidden=false;
            document.getElementById("prm_mari_frec_id").hidden=false;
            document.getElementById("mari_dosis").hidden=false;
            document.getElementById("mari_dia").hidden=false;
            document.getElementById("mari_mes").hidden=false;
            document.getElementById("mari_anio").hidden=false;
            document.getElementById("mari_dejo").hidden=false;
        } else {
            document.getElementById("mari_edad").hidden=true;
            document.getElementById("mari_edad").value='';
            document.getElementById("prm_mari_frec_id").hidden=true;
            document.getElementById("prm_mari_frec_id").value='';
            document.getElementById("mari_dosis").hidden=true;
            document.getElementById("mari_dosis").value='';
            document.getElementById("mari_dia").hidden=true;
            document.getElementById("mari_dia").value='';
            document.getElementById("mari_mes").hidden=true;
            document.getElementById("mari_mes").value='';
            document.getElementById("mari_anio").hidden=true;
            document.getElementById("mari_anio").value='';
            document.getElementById("mari_dejo").hidden=true;
            document.getElementById("mari_dejo").value='';
        }
    }

    function doc2(valor) {
        if(valor == 227){
            document.getElementById("tabaco_edad").hidden=false;
            document.getElementById("prm_tabaco_frec_id").hidden=false;
            document.getElementById("tabaco_dosis").hidden=false;
            document.getElementById("tabaco_dia").hidden=false;
            document.getElementById("tabaco_mes").hidden=false;
            document.getElementById("tabaco_anio").hidden=false;
            document.getElementById("tabaco_dejo").hidden=false;
        } else {
            document.getElementById("tabaco_edad").hidden=true;
            document.getElementById("tabaco_edad").value='';
            document.getElementById("prm_tabaco_frec_id").hidden=true;
            document.getElementById("prm_tabaco_frec_id").value='';
            document.getElementById("tabaco_dosis").hidden=true;
            document.getElementById("tabaco_dosis").value='';
            document.getElementById("tabaco_dia").hidden=true;
            document.getElementById("tabaco_dia").value='';
            document.getElementById("tabaco_mes").hidden=true;
            document.getElementById("tabaco_mes").value='';
            document.getElementById("tabaco_anio").hidden=true;
            document.getElementById("tabaco_anio").value='';
            document.getElementById("tabaco_dejo").hidden=true;
            document.getElementById("tabaco_dejo").value='';
        }
    }

    function doc3(valor) {
        if(valor == 227){
            document.getElementById("alcohol_edad").hidden=false;
            document.getElementById("prm_alcohol_frec_id").hidden=false;
            document.getElementById("alcohol_dosis").hidden=false;
            document.getElementById("alcohol_dia").hidden=false;
            document.getElementById("alcohol_mes").hidden=false;
            document.getElementById("alcohol_anio").hidden=false;
            document.getElementById("alcohol_dejo").hidden=false;
        } else {
            document.getElementById("alcohol_edad").hidden=true;
            document.getElementById("alcohol_edad").value='';
            document.getElementById("prm_alcohol_frec_id").hidden=true;
            document.getElementById("prm_alcohol_frec_id").value='';
            document.getElementById("alcohol_dosis").hidden=true;
            document.getElementById("alcohol_dosis").value='';
            document.getElementById("alcohol_dia").hidden=true;
            document.getElementById("alcohol_dia").value='';
            document.getElementById("alcohol_mes").hidden=true;
            document.getElementById("alcohol_mes").value='';
            document.getElementById("alcohol_anio").hidden=true;
            document.getElementById("alcohol_anio").value='';
            document.getElementById("alcohol_dejo").hidden=true;
            document.getElementById("alcohol_dejo").value='';
        }
    }

    function doc4(valor) {
        if(valor == 227){
            document.getElementById("tran_edad").hidden=false;
            document.getElementById("prm_tran_frec_id").hidden=false;
            document.getElementById("tran_dosis").hidden=false;
            document.getElementById("tran_dia").hidden=false;
            document.getElementById("tran_mes").hidden=false;
            document.getElementById("tran_anio").hidden=false;
            document.getElementById("tran_dejo").hidden=false;
        } else {
            document.getElementById("tran_edad").hidden=true;
            document.getElementById("tran_edad").value='';
            document.getElementById("prm_tran_frec_id").hidden=true;
            document.getElementById("prm_tran_frec_id").value='';
            document.getElementById("tran_dosis").hidden=true;
            document.getElementById("tran_dosis").value='';
            document.getElementById("tran_dia").hidden=true;
            document.getElementById("tran_dia").value='';
            document.getElementById("tran_mes").hidden=true;
            document.getElementById("tran_mes").value='';
            document.getElementById("tran_anio").hidden=true;
            document.getElementById("tran_anio").value='';
            document.getElementById("tran_dejo").hidden=true;
            document.getElementById("tran_dejo").value='';
        }
    }

    function doc5(valor) {
        if(valor == 227){
            document.getElementById("pegante_edad").hidden=false;
            document.getElementById("prm_pegante_frec_id").hidden=false;
            document.getElementById("pegante_dosis").hidden=false;
            document.getElementById("pegante_dia").hidden=false;
            document.getElementById("pegante_mes").hidden=false;
            document.getElementById("pegante_anio").hidden=false;
            document.getElementById("pegante_dejo").hidden=false;
        } else {
            document.getElementById("pegante_edad").hidden=true;
            document.getElementById("pegante_edad").value='';
            document.getElementById("prm_pegante_frec_id").hidden=true;
            document.getElementById("prm_pegante_frec_id").value='';
            document.getElementById("pegante_dosis").hidden=true;
            document.getElementById("pegante_dosis").value='';
            document.getElementById("pegante_dia").hidden=true;
            document.getElementById("pegante_dia").value='';
            document.getElementById("pegante_mes").hidden=true;
            document.getElementById("pegante_mes").value='';
            document.getElementById("pegante_anio").hidden=true;
            document.getElementById("pegante_anio").value='';
            document.getElementById("pegante_dejo").hidden=true;
            document.getElementById("pegante_dejo").value='';
        }
    }

    function doc6(valor) {
        if(valor == 227){
            document.getElementById("popper_edad").hidden=false;
            document.getElementById("prm_popper_frec_id").hidden=false;
            document.getElementById("popper_dosis").hidden=false;
            document.getElementById("popper_dia").hidden=false;
            document.getElementById("popper_mes").hidden=false;
            document.getElementById("popper_anio").hidden=false;
            document.getElementById("popper_dejo").hidden=false;
        } else {
            document.getElementById("popper_edad").hidden=true;
            document.getElementById("popper_edad").value='';
            document.getElementById("prm_popper_frec_id").hidden=true;
            document.getElementById("prm_popper_frec_id").value='';
            document.getElementById("popper_dosis").hidden=true;
            document.getElementById("popper_dosis").value='';
            document.getElementById("popper_dia").hidden=true;
            document.getElementById("popper_dia").value='';
            document.getElementById("popper_mes").hidden=true;
            document.getElementById("popper_mes").value='';
            document.getElementById("popper_anio").hidden=true;
            document.getElementById("popper_anio").value='';
            document.getElementById("popper_dejo").hidden=true;
            document.getElementById("popper_dejo").value='';
        }
    }

    function doc7(valor) {
        if(valor == 227){
            document.getElementById("dick_edad").hidden=false;
            document.getElementById("prm_dick_frec_id").hidden=false;
            document.getElementById("dick_dosis").hidden=false;
            document.getElementById("dick_dia").hidden=false;
            document.getElementById("dick_mes").hidden=false;
            document.getElementById("dick_anio").hidden=false;
            document.getElementById("dick_dejo").hidden=false;
        } else {
            document.getElementById("dick_edad").hidden=true;
            document.getElementById("dick_edad").value='';
            document.getElementById("prm_dick_frec_id").hidden=true;
            document.getElementById("prm_dick_frec_id").value='';
            document.getElementById("dick_dosis").hidden=true;
            document.getElementById("dick_dosis").value='';
            document.getElementById("dick_dia").hidden=true;
            document.getElementById("dick_dia").value='';
            document.getElementById("dick_mes").hidden=true;
            document.getElementById("dick_mes").value='';
            document.getElementById("dick_anio").hidden=true;
            document.getElementById("dick_anio").value='';
            document.getElementById("dick_dejo").hidden=true;
            document.getElementById("dick_dejo").value='';
        }
    }

    function doc8(valor) {
        if(valor == 227){
            document.getElementById("basuco_edad").hidden=false;
            document.getElementById("prm_basuco_frec_id").hidden=false;
            document.getElementById("basuco_dosis").hidden=false;
            document.getElementById("basuco_dia").hidden=false;
            document.getElementById("basuco_mes").hidden=false;
            document.getElementById("basuco_anio").hidden=false;
            document.getElementById("basuco_dejo").hidden=false;
        } else {
            document.getElementById("basuco_edad").hidden=true;
            document.getElementById("basuco_edad").value='';
            document.getElementById("prm_basuco_frec_id").hidden=true;
            document.getElementById("prm_basuco_frec_id").value='';
            document.getElementById("basuco_dosis").hidden=true;
            document.getElementById("basuco_dosis").value='';
            document.getElementById("basuco_dia").hidden=true;
            document.getElementById("basuco_dia").value='';
            document.getElementById("basuco_mes").hidden=true;
            document.getElementById("basuco_mes").value='';
            document.getElementById("basuco_anio").hidden=true;
            document.getElementById("basuco_anio").value='';
            document.getElementById("basuco_dejo").hidden=true;
            document.getElementById("basuco_dejo").value='';
        }
    }

    function doc9(valor) {
        if(valor == 227){
            document.getElementById("cocaina_edad").hidden=false;
            document.getElementById("prm_cocaina_frec_id").hidden=false;
            document.getElementById("cocaina_dosis").hidden=false;
            document.getElementById("cocaina_dia").hidden=false;
            document.getElementById("cocaina_mes").hidden=false;
            document.getElementById("cocaina_anio").hidden=false;
            document.getElementById("cocaina_dejo").hidden=false;
        } else {
            document.getElementById("cocaina_edad").hidden=true;
            document.getElementById("cocaina_edad").value='';
            document.getElementById("prm_cocaina_frec_id").hidden=true;
            document.getElementById("prm_cocaina_frec_id").value='';
            document.getElementById("cocaina_dosis").hidden=true;
            document.getElementById("cocaina_dosis").value='';
            document.getElementById("cocaina_dia").hidden=true;
            document.getElementById("cocaina_dia").value='';
            document.getElementById("cocaina_mes").hidden=true;
            document.getElementById("cocaina_mes").value='';
            document.getElementById("cocaina_anio").hidden=true;
            document.getElementById("cocaina_anio").value='';
            document.getElementById("cocaina_dejo").hidden=true;
            document.getElementById("cocaina_dejo").value='';
        }
    }

    function doc10(valor) {
        if(valor == 227){
            document.getElementById("heroina_edad").hidden=false;
            document.getElementById("prm_heroina_frec_id").hidden=false;
            document.getElementById("heroina_dosis").hidden=false;
            document.getElementById("heroina_dia").hidden=false;
            document.getElementById("heroina_mes").hidden=false;
            document.getElementById("heroina_anio").hidden=false;
            document.getElementById("heroina_dejo").hidden=false;
        } else {
            document.getElementById("heroina_edad").hidden=true;
            document.getElementById("heroina_edad").value='';
            document.getElementById("prm_heroina_frec_id").hidden=true;
            document.getElementById("prm_heroina_frec_id").value='';
            document.getElementById("heroina_dosis").hidden=true;
            document.getElementById("heroina_dosis").value='';
            document.getElementById("heroina_dia").hidden=true;
            document.getElementById("heroina_dia").value='';
            document.getElementById("heroina_mes").hidden=true;
            document.getElementById("heroina_mes").value='';
            document.getElementById("heroina_anio").hidden=true;
            document.getElementById("heroina_anio").value='';
            document.getElementById("heroina_dejo").hidden=true;
            document.getElementById("heroina_dejo").value='';
        }
    }

    function doc11(valor) {
        if(valor == 227){
            document.getElementById("doscb_edad").hidden=false;
            document.getElementById("prm_doscb_frec_id").hidden=false;
            document.getElementById("doscb_dosis").hidden=false;
            document.getElementById("doscb_dia").hidden=false;
            document.getElementById("doscb_mes").hidden=false;
            document.getElementById("doscb_anio").hidden=false;
            document.getElementById("doscb_dejo").hidden=false;
        } else {
            document.getElementById("doscb_edad").hidden=true;
            document.getElementById("doscb_edad").value='';
            document.getElementById("prm_doscb_frec_id").hidden=true;
            document.getElementById("prm_doscb_frec_id").value='';
            document.getElementById("doscb_dosis").hidden=true;
            document.getElementById("doscb_dosis").value='';
            document.getElementById("doscb_dia").hidden=true;
            document.getElementById("doscb_dia").value='';
            document.getElementById("doscb_mes").hidden=true;
            document.getElementById("doscb_mes").value='';
            document.getElementById("doscb_anio").hidden=true;
            document.getElementById("doscb_anio").value='';
            document.getElementById("doscb_dejo").hidden=true;
            document.getElementById("doscb_dejo").value='';
        }
    }

    function doc12(valor) {
        if(valor == 227){
            document.getElementById("acidos_edad").hidden=false;
            document.getElementById("prm_acidos_frec_id").hidden=false;
            document.getElementById("acidos_dosis").hidden=false;
            document.getElementById("acidos_dia").hidden=false;
            document.getElementById("acidos_mes").hidden=false;
            document.getElementById("acidos_anio").hidden=false;
            document.getElementById("acidos_dejo").hidden=false;
        } else {
            document.getElementById("acidos_edad").hidden=true;
            document.getElementById("acidos_edad").value='';
            document.getElementById("prm_acidos_frec_id").hidden=true;
            document.getElementById("prm_acidos_frec_id").value='';
            document.getElementById("acidos_dosis").hidden=true;
            document.getElementById("acidos_dosis").value='';
            document.getElementById("acidos_dia").hidden=true;
            document.getElementById("acidos_dia").value='';
            document.getElementById("acidos_mes").hidden=true;
            document.getElementById("acidos_mes").value='';
            document.getElementById("acidos_anio").hidden=true;
            document.getElementById("acidos_anio").value='';
            document.getElementById("acidos_dejo").hidden=true;
            document.getElementById("acidos_dejo").value='';
        }
    }

    function doc13(valor) {
        if(valor == 227){
            document.getElementById("lsd_edad").hidden=false;
            document.getElementById("prm_lsd_frec_id").hidden=false;
            document.getElementById("lsd_dosis").hidden=false;
            document.getElementById("lsd_dia").hidden=false;
            document.getElementById("lsd_mes").hidden=false;
            document.getElementById("lsd_anio").hidden=false;
            document.getElementById("lsd_dejo").hidden=false;
        } else {
            document.getElementById("lsd_edad").hidden=true;
            document.getElementById("lsd_edad").value='';
            document.getElementById("prm_lsd_frec_id").hidden=true;
            document.getElementById("prm_lsd_frec_id").value='';
            document.getElementById("lsd_dosis").hidden=true;
            document.getElementById("lsd_dosis").value='';
            document.getElementById("lsd_dia").hidden=true;
            document.getElementById("lsd_dia").value='';
            document.getElementById("lsd_mes").hidden=true;
            document.getElementById("lsd_mes").value='';
            document.getElementById("lsd_anio").hidden=true;
            document.getElementById("lsd_anio").value='';
            document.getElementById("lsd_dejo").hidden=true;
            document.getElementById("lsd_dejo").value='';
        }
    }

    function doc14(valor){
        if(valor == 227){
            document.getElementById("prm_tTrastorno_id").hidden=false;
        } else {
            document.getElementById("prm_tTrastorno_id").hidden=true;
            document.getElementById("prm_tTrastorno_id").value='';
        }
    }

    function doc15(valor){
        if(valor == 227){
            document.getElementById("prm_tapetito_id").hidden=false;
        } else {
            document.getElementById("prm_tapetito_id").hidden=true;
            document.getElementById("prm_tapetito_id").value='';
        }
    }

    function doc16(valor){
        if(valor == 227){
            document.getElementById("prm_tsudoracion_id").hidden=false;
        } else {
            document.getElementById("prm_tsudoracion_id").hidden=true;
            document.getElementById("prm_tsudoracion_id").value='';
        }
    }

    function doc17(valor){
        if(valor == 227){
            document.getElementById("prm_tanimo_id").hidden=false;
        } else {
            document.getElementById("prm_tanimo_id").hidden=true;
            document.getElementById("prm_tanimo_id").value='';
        }
    }

    function carga() {
        doc(document.getElementById('prm_probado_id').value);
        doc1(document.getElementById('prm_mari_sino_id').value);
        doc2(document.getElementById('prm_tabaco_sino_id').value);
        doc3(document.getElementById('prm_alcohol_sino_id').value);
        doc4(document.getElementById('prm_tran_sino_id').value);
        doc5(document.getElementById('prm_pegante_sino_id').value);
        doc6(document.getElementById('prm_popper_sino_id').value);
        doc7(document.getElementById('prm_dick_sino_id').value);
        doc8(document.getElementById('prm_basuco_sino_id').value);
        doc9(document.getElementById('prm_cocaina_sino_id').value);
        doc10(document.getElementById('prm_heroina_sino_id').value);
        doc11(document.getElementById('prm_doscb_sino_id').value);
        doc12(document.getElementById('prm_acidos_sino_id').value);
        doc13(document.getElementById('prm_lsd_sino_id').value);
        doc14(document.getElementById('prm_trastorno_id').value);
        doc15(document.getElementById('prm_apetito_id').value);
        doc16(document.getElementById('prm_sudoracion_id').value);
        doc17(document.getElementById('prm_animo_id').value);
    }
    window.onload = carga();
</script>
