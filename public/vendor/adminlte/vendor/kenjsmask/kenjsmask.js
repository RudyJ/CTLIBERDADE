(function( $ ){
    $.fn.kenjsMask = function() {

        return this.each(function() {


        	var input = $(this),
        		type_mask = input.attr("data-kenjs"),
                tecla,
        		methods = {
        			data : function(){
        				var str = input.val(),
        					tamanho = str.length;
                            
                        if($.isNumeric(tecla)){
        					if(tamanho > 10){
        						input.val(str.substring(0, 10));
        					}else{

        						if(tamanho == 2){
        							input.val(str + "/");
        						}else if(tamanho == 5){
        							input.val(str + "/");
        						}

        					}
                        }else{
                            input.val(str.substring(0, tamanho - 1));
                        }
        			},
        			cpf : function(){
        				var str = input.val(),
        					tamanho = str.length;

                        if($.isNumeric(tecla)){
        					if(tamanho > 14){
        						input.val(str.substring(0, 14));
        					}else{
        						if(tamanho == 3){
        							input.val(str + ".");
        						}else if(tamanho == 7){
        							input.val(str + ".");
        						}else if(tamanho == 11){
        							input.val(str + "-");
        						}
        					}
                        }else{
                            input.val(str.substring(0, tamanho - 1));
                        }
        			},
        			tel : function(){
        				var str = input.val(),
        					tamanho = str.length;

                        if($.isNumeric(tecla)){
            				if(tamanho > 14){
        						input.val(str.substring(0, 14));
        					}else{

        						if(tamanho == 1 && str != "("){
        							input.val("(" + str);
        						}else if(tamanho == 3){
        							input.val(str + ") ");
        						}else if(tamanho == 9){
        							input.val(str + "-");
        						}
        					}
                        }else{
                            input.val(str.substring(0, tamanho - 1));
                        }
        			},
        			cel : function(){
        				var str = input.val(),
        					tamanho = str.length;

                        if($.isNumeric(tecla)){
            				if(tamanho > 15){
        						input.val(str.substring(0, 15));
        					}else{

        						if(tamanho == 1 && str != "("){
        							input.val("(" + str);
        						}else if(tamanho == 3){
        							input.val(str + ") ");
        						}else if(tamanho == 10){
        							input.val(str + "-");
        						}
        					}
                        }else{
                            input.val(str.substring(0, tamanho - 1));
                        }
        			},
        			cep : function(){
        				var str = input.val(),
        					tamanho = str.length;

                        if($.isNumeric(tecla)){
            				if(tamanho > 9){
        						input.val(str.substring(0, 14));
        					}else{

        						if(tamanho == 5){
        							input.val(str + "-");
        						}
        						
        					}
                        }else{
                            input.val(str.substring(0, tamanho - 1));
                        }

        			},
                    cardnumber : function(){
                        var str = input.val(),
                            tamanho = str.length;

                        if($.isNumeric(tecla)){
                            if(tamanho > 19){
                                input.val(str.substring(0, 19));
                            }else{

                                if(tamanho == 4){
                                    input.val(str + " ");
                                }else if(tamanho == 9){
                                    input.val(str + " ");
                                }else if(tamanho == 14){
                                    input.val(str + " ");
                                }
                                
                            }
                        }else{
                            input.val(str.substring(0, tamanho - 1));
                        }


                    },
                    vencimento : function(){
                        var str = input.val(),
                            tamanho = str.length;

                        if($.isNumeric(tecla)){
                            if(tamanho > 7){
                                input.val(str.substring(0, 7));
                            }else{
                               if(tamanho == 2){
                                    input.val(str + "/");
                                }
                            }
                        }else{
                            input.val(str.substring(0, tamanho - 1));
                        }
                    }
        		};


    		if(type_mask == "data"){
    			input.on("keyup", methods.data);
    		}else if(type_mask == "cpf"){
    			input.on("keyup", methods.cpf);
    		}else if(type_mask == "tel"){
    			input.on("keyup", methods.tel);
    		}else if(type_mask == "cel"){
    			input.on("keyup", methods.cel);
    		}else if(type_mask == "cep"){
                input.on("keyup", methods.cep);
            }else if(type_mask == "cardnumber"){
                input.on("keyup", methods.cardnumber);
            }else if(type_mask == "vencimento"){
                input.on("keyup", methods.vencimento);
            }

            $(document).on("keypress", function(e){
                tecla = String.fromCharCode(e.keyCode);
            });

        });

    }; 
})( jQuery );