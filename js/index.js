'use strict'
$(function(){

    $('.subir').click(function(e){
        e.preventDefault();
        $('html,body').animate({
            scrollTop:0
        },500);

        return false;
    });

    $('#formulario').validate({
        debug:false,
        rules:{
            user:{
                required: true,
                minlength:5
            },
            password:{
                required: true,
                minlength:5
            }
        },
        messages:{
            user:{
                required:'Por favor, ingrese su nombre de usuario',
                minlength:'su nombre de usuario debe tener al menos 5 caracteres'
            },
            password:{
                required:'ingrese proporcione una contraseña',
                minlength:'su contraseña debe tener al menos 5 caracteres'
            }
        }
    });
 
    $('#entregadas').click(function(){
        $('.content-grafica').modal();
        PeticionAjax1();
    });

    $('#perdidas').click(function(){
        $('.content-grafica2').modal();
        PetecionAjax2();
    });

    $('#cosecha').click(function(){
        $('.content-terc').modal();
        PetecionAjax4();
    });

    function PeticionAjax1(){
        var ajax = $.ajax({
            url:"../peticiones/consult.produccion.php",
            type:'GET',
            dataType:'json',
            success:function(response){
                console.log(response);
                var canten = [];
                var fben = []; 
                var color = [];
                var colores = ()=>{
                    var r = Math.floor(Math.random() * 255);
                    var g = Math.floor(Math.random() * 255);
                    var b = Math.floor(Math.random() * 255);
                    return "rgb(" + r + "," + g + "," + b + ")";
                }
                response.forEach(function(value){
                    canten.push(value.canten);
                    fben.push(value.beneficiados);
                    color.push(colores());
                });

                var grafica = $('#grafica-one');
                console.log(grafica);

                var data = {
                    labels:fben,
                    datasets:[
                        {
                            backgroundColor:'rgba(200,200,200,0.75)',
                            borderColor:'rgba(200,200,200,0.75)',
                            hoverBackgroundColor:'rgba(200,200,200,1)',  
                            hoverBorderColor:'rgba(200,200,200,1)',
                            data:canten,
                            backgroundColor:color
                        }
                    ]
                };

                var chart = new Chart(grafica,{
                    type:'pie',
                    data:data,
                    options:{
                       scales:{
                           yAxes:[{
                               ticks:{
                                beginAtZero: true
                               }
                           }]
                       },
                       title: {
                        display: true,
                        text: 'Cantidad entregada por beneficiario',
                        fontSize: 20,
                        padding: 20,
                        fontColor: '#12619c',
                      }
                    }
                });
            },error:function(response){
                console.log(response);
            }
       });
    
       ajax.done(function(){
           console.log('successfully');
       }).fail(function(){
           console.log('error');
       }).always(function(){
            console.log('complete');
       });
    }

    function PetecionAjax2(){
        var ajax = $.ajax({
            url:"../peticiones/consult.produccion.php",
            type:'GET',
            dataType:'json',
            success:function(response){
                console.log(response);
                let fben = [];
                let cantper = [];
                var color = [];
                var colores = ()=>{
                    var r = Math.floor(Math.random() * 255);
                    var g = Math.floor(Math.random() * 255);
                    var b = Math.floor(Math.random() * 255);
                    return "rgb(" + r + "," + g + "," + b + ")";
                }
                response.map((value)=>{
                    //console.log(value);
                    fben.push(value.beneficiados);
                    cantper.push(value.cantper);
                    color.push(colores());
                    console.log(fben);
                    console.log(cantper);
                });

                let grafica2 = $('#grafica-two');

                let data = {
                    labels:fben,
                    datasets:[
                        {
                            label:'valor',
                            backgroundColor:'rgba(200,200,200,0.75)',
                            borderColor:'rgba(200,200,200,0.75)',
                            hoverBackgroundColor:'rgba(200,200,200,1)',  
                            hoverBorderColor:'rgba(200,200,200,1)',
                            data:cantper,
                            backgroundColor:color
                        }
                    ]
                };
                
                let chart = new Chart(grafica2,{
                    type:'bar',
                    data:data,
                    options:{
                       scales:{
                           yAxes:[{
                               ticks:{
                                beginAtZero: true
                               }
                           }]
                       },
                       legend:{
                        display:false
                        },
                       title: {
                        display: true,
                        text: 'Cantidad de consecha perdida por beneficiario',
                        fontSize: 20,
                        padding: 20,
                        fontColor: '#12619c',
                      }
                    }
                });

            },error:function(response){
                console.log(response);
            }
        });

        ajax.done(function(){
            console.log('successfully');
        }).fail(function(){
            console.log('fail');
        }).always(function(){
            console.log('complete');
        })
    }

    function PetecionAjax4(){
        var ajax = $.ajax({
            url:"../peticiones/consult.produccion.php",
            type:'GET',
            dataType:'json',
            success:function(response){
                var benf = [];
                var cantco = [];
                var color = [];
                var colores = ()=>{
                    var r = Math.floor(Math.random() * 255);
                    var g = Math.floor(Math.random() * 255);
                    var b = Math.floor(Math.random() * 255);
                    return "rgb(" + r + "," + g + "," + b + ")";
                }
                response.forEach((value)=>{
                    benf.push(value.beneficiados);
                    cantco.push(value.cantco);
                    color.push(colores());
                });

                var tercegra = $('#tercegra');
                var delivered = {
                    type:'horizontalBar',
                    data:{
                        labels:benf,
                        datasets:[
                            {
                                backgroundColor:'rgba(200,200,200,0.75)',
                                borderColor:'rgba(200,200,200,0.75)',
                                hoverBackgroundColor:'rgba(200,200,200,1)',  
                                hoverBorderColor:'rgba(200,200,200,1)',
                                data:cantco,
                                backgroundColor:color
                            }
                        ]
                    },
                    options:{
                        scales:{
                            yAxes:[{
                                ticks:{
                                 beginAtZero: true
                                }
                            }]
                        },
                        legend:{
                            display:false
                        },
                        title: {
                            display: true,
                            text: 'Cantidad cosechada por beneficiario',
                            fontSize: 20,
                            padding: 20,
                            fontColor: '#12619c',
                          }
                    }
                };

                var chart = new Chart(tercegra,delivered);
            }
        });

        ajax.done(function(){
            console.log('successfully');
        }).fail(function(){
            console.log('fail');
        }).always(function(){
            console.log('complete');
        });
    }

    if(window.location.href.indexOf('beneficiarios') >-1){
        $('#fnac').datepicker();
    }
    $('#bene-form').submit(function(e){
        var insertBen = {
            fben:$('#fben').val(),
            nom:$('#nom').val(),
            ap:$('#ap').val(),
            am:$('#am').val(),
            fnac:$('#fnac').val(),
            sexo:$('#sexo').val(),
            cp:$('#cp').val(),
            curp:$('#curp').val(),
            edo:$('#edo').val(),
            muni:$('#muni').val(),
            loc:$('#loc').val(),
            calle:$('#calle').val(),
            ref:$('#ref').val(),
            email:$('#email').val(),
            ecivil:$('#ecivil').val(),
            tel:$('#tel').val()
        };
        
        $.post('../peticiones/insertbenef.php',insertBen,(response)=>{
            if(response){
                swal.fire({
                    title:"¡Enhorabuena!",
                    text:"Dato Insertado Satisfactoriamente",
                    icon:"success"
                });
            }

            $('#bene-form').trigger('reset');
        });

        e.preventDefault();
    });

    $('#btnUpdate').click(function(){
        $('.modal1').modal();
        Update();
    });

    $('#btnDelete').click(function(){
        $('.modal2').modal();
        Delete();
    });

    $('#Consult').click(function(){
        $('.modal3').modal();
        Query();
    });

    if(window.location.href.indexOf('beneficiarios')>-1){
        $('#acfecha').datepicker();
    }
    

    function Update(){
        $('#form-update').submit((e)=>{
            var updateBene = {
                acfolio:$('#acfolio').val(),
                acnombre:$('#acnombre').val(),
                acpa:$('#acpa').val(),
                acam:$('#acam').val(),
                acfecha:$('#acfecha').val(),
                acsex:$('#acsex').val(),
                accp:$('#accp').val(),
                accurp:$('#accurp').val(),
                acedo:$('#acedo').val(),
                acmuni:$('#acmuni').val(),
                acloc:$('#acloc').val(),
                accalle:$('#accalle').val(),
                acref:$('#acref').val(),
                acemail:$('#acemail').val(),
                acecivil:$('#acecivil').val(),
                actel:$('#actel').val()
            };

            $.post('../peticiones/updatebene.php',updateBene,(response)=>{
                if(response){
                    swal.fire({
                        title:"¡Enhorabuena!",
                        text:"Dato Actualizado Satisfactoriamente",
                        icon:"success"
                    });
                }

                $('#form-update').trigger('reset');
            });

            e.preventDefault();
        });
    }

    function Delete(){
        $('#form-delete').submit((e)=>{
            var deleteBene = {
                folio:$('#folio').val()
            };
            $.post('../peticiones/deletebene.php',deleteBene,(response)=>{
                if(response){
                    swal.fire({
                        title:"¡Enhorabuena!",
                        text:"Dato Eliminado Satisfactoriamente",
                        icon:"success"
                    });
                }

                $('#form-delete').trigger('reset');
            });

            e.preventDefault();
        });
    }

    function Query(){
        var ajax = $.ajax({
            url:'../peticiones/consult.beneficiarios.php',
            type:'GET',
            success:function(response){
                var json_bene = JSON.parse(response);
                var template = '';
                json_bene.forEach((value)=>{
                    template += `
                        <tr>
                            <td>${value.fben}</td>
                            <td>${value.nom}</td>
                            <td>${value.ap}</td>
                            <td>${value.am}</td>
                            <td>${value.fnac}</td>
                            <td>${value.sexo}</td>
                            <td>${value.cp}</td>
                            <td>${value.curp}</td>
                            <td>${value.edo}</td>
                            <td>${value.muni}</td>
                            <td>${value.loc}</td>
                            <td>${value.calle}</td>
                            <td>${value.ref}</td>
                            <td>${value.email}</td>
                            <td>${value.ecivil}</td>
                            <td>${value.tel}</td>
                        </tr>
                    `;
                });

                $('#showBene').html(template);
            }
        });

        ajax.done(function(){
            console.log('successfully');
        }).fail(function(){
            console.log('fail');
        }).always(function(){
            console.log('complete');
        })
    }

    $('#form-plant').submit(function(e){
        var addPlant = {
            fplant:$('#fplant').val(),
            nom:$('#nom').val(),
            medsie:$('#medsie').val(),
            exist:$('#exist').val(),
            fvi:$('#fvi').val(),
            fbene:$('#fbene').val()
        };
            $.post('../peticiones/addplant.php',addPlant,(response)=>{
                if(!response){
                    swal.fire({
                        title:"¡ERROR!",
                        text:"Ingrese datos completos",
                        icon:"error"
                    });
                }else{
                    swal.fire({
                        title:"¡Enhorabuena!",
                        text:"Dato Insertado Satisfactoriamente",
                        icon:"success"
                    });
                }

                $('#form-plant').trigger('reset');
            });
        e.preventDefault();
    });

    $('#updateplant').click(function(){
        $('.actualizar-plant').modal();
        updatePlanta();
    });

    $('#deleteplant').click(function(){
        $('.borrar-plant').modal();
        deletePlanta();
    });

    $('#consultplant').click(function(){
        $('.queryplant').modal();
        QueryPlant();
    });

    $('#grafica-plant').click(function(){
        $('.content-grafica3').modal();
        petecionAjax3();
    });

    function updatePlanta(){
        $('#updateplanta').submit((e)=>{
            var updateplant = {
                acplant:$('#acplant').val(),
                acnomplant:$('#acnomplant').val(),
                acmedsie:$('#acmedsie').val(),
                acexist:$('#acexist').val(),
                acviv:$('#acviv').val(),
                actben:$('#actben').val()
            };
            $.post('../peticiones/updateplant.php',updateplant,(response)=>{
                if(response){
                    swal.fire({
                        title:"¡Enhorabuena!",
                        text:"Dato Actualizado Satisfactoriamente",
                        icon:"success"
                    });
                }

                $('#updateplanta').trigger('reset');
            });

            e.preventDefault();
        });
        
    }

    function deletePlanta(){
        $('#delete-planta').submit((e)=>{
            var deleteplant = {
                eliplant:$('#eliplant').val()
            };
            $.post('../peticiones/deleteplant.php',deleteplant,(response)=>{
                if(response){
                    swal.fire({
                        title:"¡Enhorabuena!",
                        text:"Dato Eliminado Satisfactoriamente",
                        icon:"success"
                    });
                }

                $('#delete-planta').trigger('reset');

            });
            e.preventDefault();
        })
    }

    function QueryPlant(){
        var ajax = $.ajax({
            url:'../peticiones/consult.plantas.php',
            type:'GET',
            success:function(response){
                var json_plant = JSON.parse(response);
                var template = '';
                json_plant.forEach((value)=>{
                    template += `
                    <tr>
                        <td>${value.fplant}</td>
                        <td>${value.nom}</td>
                        <td>${value.medsie}</td>
                        <td>${value.exist}</td>
                        <td>${value.fvi}</td>
                        <td>${value.fben}</td>
                    </tr>
                    `;
                });

                $('#showPlant').html(template);
            }
        });

        ajax.done(function(){
            console.log('successfully');
        }).fail(function(){
            console.log('fail');
        }).always(function(){
            console.log('complete');
        })
    }
   
    function petecionAjax3(){
        var ajax = $.ajax({
            url:'../peticiones/graficaplanta.php',
            type:'GET',
            dataType:'json',
            success:function(response){
                console.log(response);
                var nom = [];
                var exist = [];
                var color = [];
                var colores = ()=>{
                    var r = Math.floor(Math.random() * 255);
                    var g = Math.floor(Math.random() * 255);
                    var b = Math.floor(Math.random() * 255);
                    return "rgb(" + r + "," + g + "," + b + ")";
                }
                response.forEach((value)=>{
                    nom.push(value.nom);
                    exist.push(value.total);
                    color.push(colores());
                });

                var grafica3 = $('#grafica-three');
                var json_plantas = {
                    type:'bar',
                    data:{
                        labels:nom,
                        datasets:[
                            {
                                backgroundColor:'rgba(200,200,200,0.75)',
                                borderColor:'rgba(200,200,200,0.75)',
                                hoverBackgroundColor:'rgba(200,200,200,1)',  
                                hoverBorderColor:'rgba(200,200,200,1)',
                                data:exist,
                                backgroundColor:color
                            }
                        ]
                    },
                    options:{
                        scales:{
                            yAxes:[{
                                ticks:{
                                 beginAtZero: true
                                }
                            }]
                        },
                        legend:{
                            display:false
                        },
                        title: {
                            display: true,
                            text: 'Existencia de plantas',
                            fontSize: 20,
                            padding: 20,
                            fontColor: '#12619c',
                          }
                    }
                };
                var chart = new Chart(grafica3,json_plantas);
            }
        });

        ajax.done(function(){
            console.log('successfully');
        }).fail(function(){
            console.log('fail');
        }).always(function(){
            console.log('complete');
        })
    }

    $('#form-viv').submit((e)=>{
        var addviv = {
            fviv:$('#fviv').val(),
            nomviv:$('#nomviv').val(),
            existencia:$('#existencia').val(),
            dir:$('#dir').val(),
            edoviv:$('#edoviv').val(),
            muniviv:$('#muniviv').val(),
            fenc:$('#fenc').val(),
            tpl:$('#tpl').val(),
            cant:$('#cant').val()
        };

        $.post('../peticiones/addviv.php',addviv,(response)=>{
            if(response){
                swal.fire({
                    title:"¡Enhorabuena!",
                    text:"Dato Insertado Satisfactoriamente",
                    icon:"success"
                });
            }

            $('#form-viv').trigger('reset');
        });

        e.preventDefault();
    });

    $('#updateviv').click(function(){
        $('.actviv').modal();
        updateViv();
    });

    $('#deleteviv').click(function(){
        $('.eliviv').modal();
        deleteViv();
    });
    
    $('#queryviv').click(function(){
        $('.consultviv').modal();
        queryViv();
    });

    $('#graficaviv').click(function(){
        $('.grafviv').modal();
        GrafViv();
    });

    function updateViv(){
        $('#updatevivero').submit((e)=>{
            var updatevive = {
                upviv:$('#upviv').val(),
                upnom:$('#upnom').val(),
                upexistencia:$('#upexistencia').val(),
                updir:$('#updir').val(),
                upedoviv:$('#upedoviv').val(),
                upmuniviv:$('#upmuniviv').val(),
                upfenc:$('#upfenc').val(),
                uptpl:$('#uptpl').val(),
                upcant:$('#upcant').val()
            };
            
            $.post('../peticiones/updateviv.php',updatevive,(response)=>{
                if(response){
                    swal.fire({
                        title:"¡Enhorabuena!",
                        text:"Dato Actualizado Satisfactoriamente",
                        icon:"success"
                    });
                }

                $('#updatevivero').trigger('reset');

            });

            e.preventDefault();
        });
    }

    function deleteViv(){
        $('#deletevivero').submit(function(e){
            var deleteviv = {
                elimviv:$('#del-viv').val()
            };
            
            $.post('../peticiones/deleteviv.php',deleteviv,function(response){
                if(response){
                    swal.fire({
                        title:"¡Enhorabuena!",
                        text:"Dato Eliminado Satisfactoriamente",
                        icon:"success"
                    });
                }

                $('#deletevivero').trigger('reset');
            });

            e.preventDefault();
        });
    }

    function queryViv(){
        var ajax = $.ajax({
            url:'../peticiones/consult.viveros.php',
            type:'GET',
            success:(response)=>{
                var json_viv = JSON.parse(response);
                console.log(json_viv);
                var template = '';
                json_viv.map((value)=>{
                    template+= `
                        <tr>
                            <td>${value.fvi}</td>
                            <td>${value.novi}</td>
                            <td>${value.Existencia}</td>
                            <td>${value.dir}</td>
                            <td>${value.edo}</td>
                            <td>${value.muni}</td>
                            <td>${value.fenc}</td>
                            <td>${value.tpl}</td>
                            <td>${value.cant}</td>
                        </tr>
                    `;
                });

                $('#showViv').html(template);
            }
        });

        ajax.done(()=>{
            console.log('successfully');
        }).fail(()=>{
            console.log('fail');
        }).always(()=>{
            console.log('complete');
        })
    }

    function GrafViv(){
       var ajax = $.ajax({
            url:'../peticiones/graficaviv.php',
            type:'GET',
            success:(response)=>{
                var json_viv = JSON.parse(response);
                var novi = [];
                var total = [];
                var color = [];
                var colores = ()=>{
                    var r = Math.floor(Math.random() * 255);
                    var g = Math.floor(Math.random() * 255);
                    var b = Math.floor(Math.random() * 255);
                    return "rgb(" + r + "," + g + "," + b + ")";
                }

                json_viv.forEach((value)=>{
                    novi.push(value.novi);
                    total.push(value.total);
                    color.push(colores());
                });

                var graficaviv = {
                    type:'doughnut',
                    data:{
                        labels:novi,
                        datasets:[
                            {
                                backgroundColor:'rgba(200,200,200,0.75)',
                                borderColor:'rgba(200,200,200,0.75)',
                                hoverBackgroundColor:'rgba(200,200,200,1)',  
                                hoverBorderColor:'rgba(200,200,200,1)',
                                data:total,
                                backgroundColor:color
                            }
                        ]
                    },
                    options:{
                        scales:{
                            yAxes:[{
                                ticks:{
                                 beginAtZero: true
                                }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'Existencia de Viveros',
                            fontSize: 20,
                            padding: 20,
                            fontColor: '#12619c',
                          }
                    }
                };

                var grapviv = $('#grafica-viv');
                var chart = new Chart(grapviv,graficaviv);
            }
        });

        ajax.done(()=>{
            console.log('sucessfully');
        }).fail(()=>{
            console.log('fail');
        }).always(()=>{
            console.log('complete');
        });
    }

    $('#form-pro').submit((e)=>{
        var addpro = {
            fpro:$('#fpro').val(),
            nuhec:$('#nuhec').val(),
            dir:$('#dir').val(),
            edo:$('#edo').val(),
            muni:$('#muni').val(),
            loc:$('#loc').val(),
            fben:$('#fben').val()
        };
        $.post('../peticiones/addpro.php',addpro,function(response){
            if(response){
                swal.fire({
                    title:"¡Enhorabuena!",
                    text:"Dato Insertado Satisfactoriamente",
                    icon:"success"
                });
            }
            $('#form-pro').trigger('reset');
        });
        e.preventDefault();
    });

    $('#updatePro').click(function(){
        $('.updatepropiedad').modal();
        updatePro();
    });

    $('#deletePro').click(function(){
        $('.deletepropiedad').modal();
        deletePro();
    });

    $('#queryPro').click(function(){
        $('.querypropiedad').modal();
        queryPro();
    });

    function updatePro(){
        $('#updatepro').submit((e)=>{
            var updateprop = {
                apfpro:$('#apfpro').val(),
                apnuhec:$('#apnuhec').val(),
                apdir:$('#apdir').val(),
                actedo:$('#actedo').val(),
                apmuni:$('#apmuni').val(),
                aploc:$('#aploc').val(),
                apfben:$('#apfben').val()
            };
           
            $.post('../peticiones/updateprop.php',updateprop,function(response){
                if(response){
                    swal.fire({
                        title:"¡Enhorabuena!",
                        text:"Dato Insertado Satisfactoriamente",
                        icon:"success"
                    });
                }

                $('#updatepro').trigger('reset');
            });

            e.preventDefault();
        });
    }

    function deletePro(){
        $('#deletepro').submit((e)=>{
            var deleteprop = { delfpro:$('#delfpro').val() }
            $.post('../peticiones/deleteprop.php',deleteprop,(response)=>{
                if(response){
                    swal.fire({
                        title:"¡Enhorabuena!",
                        text:"Dato Eliminado Satisfactoriamente",
                        icon:"success"
                    });
                }

                $('#deletepro').trigger('reset');
            });
            e.preventDefault();
        });
    }

    function queryPro(){
        $.get('../peticiones/consult.propiedad.php',(response)=>{
            let json_prop = JSON.parse(response);
            let template = '';
                json_prop.forEach((value)=>{
                    template+=`
                        <tr>
                            <td>${value.fpro}</td>
                            <td>${value.nuhec}</td>
                            <td>${value.dir}</td>
                            <td>${value.edo}</td>
                            <td>${value.muni}</td>
                            <td>${value.loc}</td>
                            <td>${value.fben}</td>
                        </tr>
                    `;
                });

                $('#showProp').html(template);
        });
    }

});