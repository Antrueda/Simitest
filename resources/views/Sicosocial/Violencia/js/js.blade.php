<script>
$(document).ready(function() {
    $('#contextos').select2({
        dropdownParent: $('#contextos_div'),
        language: "es"
    });
    $('#tipos').select2({
        dropdownParent: $('#tipos_div'),
        language: "es"
    });
});
function doc(valor){
    if(valor == 228){
        document.getElementById("prm_fam_fis_id").hidden=true;
        document.getElementById("prm_fam_psi_id").hidden=true;
        document.getElementById("prm_fam_sex_id").hidden=true;
        document.getElementById("prm_fam_eco_id").hidden=true;
        document.getElementById("prm_amicol_fis_id").hidden=true;
        document.getElementById("prm_amicol_psi_id").hidden=true;
        document.getElementById("prm_amicol_sex_id").hidden=true;
        document.getElementById("prm_amicol_eco_id").hidden=true;
        document.getElementById("prm_par_fis_id").hidden=true;
        document.getElementById("prm_par_psi_id").hidden=true;
        document.getElementById("prm_par_sex_id").hidden=true;
        document.getElementById("prm_par_eco_id").hidden=true;
        document.getElementById("prm_compar_fis_id").hidden=true;
        document.getElementById("prm_compar_psi_id").hidden=true;
        document.getElementById("prm_compar_sex_id").hidden=true;
        document.getElementById("prm_compar_eco_id").hidden=true;
        document.getElementById("prm_ins_fis_id").hidden=true;
        document.getElementById("prm_ins_psi_id").hidden=true;
        document.getElementById("prm_ins_sex_id").hidden=true;
        document.getElementById("prm_ins_eco_id").hidden=true;
        document.getElementById("prm_lab_fis_id").hidden=true;
        document.getElementById("prm_lab_psi_id").hidden=true;
        document.getElementById("prm_lab_sex_id").hidden=true;
        document.getElementById("prm_lab_eco_id").hidden=true;
        document.getElementById("contextos_div").hidden=true;
        document.getElementById("tipos_div").hidden=true;

    } else {
        document.getElementById("prm_fam_fis_id").hidden=false;
        document.getElementById("prm_fam_psi_id").hidden=false;
        document.getElementById("prm_fam_sex_id").hidden=false;
        document.getElementById("prm_fam_eco_id").hidden=false;
        document.getElementById("prm_amicol_fis_id").hidden=false;
        document.getElementById("prm_amicol_psi_id").hidden=false;
        document.getElementById("prm_amicol_sex_id").hidden=false;
        document.getElementById("prm_amicol_eco_id").hidden=false;
        document.getElementById("prm_par_fis_id").hidden=false;
        document.getElementById("prm_par_psi_id").hidden=false;
        document.getElementById("prm_par_sex_id").hidden=false;
        document.getElementById("prm_par_eco_id").hidden=false;
        document.getElementById("prm_compar_fis_id").hidden=false;
        document.getElementById("prm_compar_psi_id").hidden=false;
        document.getElementById("prm_compar_sex_id").hidden=false;
        document.getElementById("prm_compar_eco_id").hidden=false;
        document.getElementById("prm_ins_fis_id").hidden=false;
        document.getElementById("prm_ins_psi_id").hidden=false;
        document.getElementById("prm_ins_sex_id").hidden=false;
        document.getElementById("prm_ins_eco_id").hidden=false;
        document.getElementById("prm_lab_fis_id").hidden=false;
        document.getElementById("prm_lab_psi_id").hidden=false;
        document.getElementById("prm_lab_sex_id").hidden=false;
        document.getElementById("prm_lab_eco_id").hidden=false;
        document.getElementById("contextos_div").hidden=false;
        document.getElementById("tipos_div").hidden=false;

    }
}

function doc1(valor){
    if(valor == 228 && document.getElementById('prm_dis_ori_id').value == 228||valor == 235 && document.getElementById('prm_dis_ori_id').value == 235
    ||valor == 228 && document.getElementById('prm_dis_ori_id').value == 235||valor == 235 && document.getElementById('prm_dis_ori_id').value == 228){
        document.getElementById("contextos_div").hidden=true;
        document.getElementById("contextos").value=[];
        document.getElementById("tipos_div").hidden=true;
        document.getElementById("tipos").value=[]
    } else {
        document.getElementById("contextos_div").hidden=false;
        document.getElementById("tipos_div").hidden=false;
    }
}


function doc2(valor){
    if(valor == 228 && document.getElementById('prm_dis_gen_id').value == 228||valor == 235 && document.getElementById('prm_dis_gen_id').value==235
    ||valor == 228 && document.getElementById('prm_dis_gen_id').value==235||valor == 235 && document.getElementById('prm_dis_gen_id').value==228){
        document.getElementById("contextos_div").hidden=true;
        document.getElementById("contextos").value=[];
        document.getElementById("tipos_div").hidden=true;
        document.getElementById("tipos").value=[]
     } else {
        document.getElementById("contextos_div").hidden=false;
        document.getElementById("tipos_div").hidden=false;
        
    }
}



function carga() {
    doc(document.getElementById('prm_tip_vio_id').value);
    doc1(document.getElementById('prm_dis_gen_id').value);
    doc2(document.getElementById('prm_dis_ori_id').value);
}
window.onload=carga;
</script>
