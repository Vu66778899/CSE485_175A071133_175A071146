var danhmuc = [];
        var i=1;
        function add(){
            var name =$('#name').val();
            var sapo =$('#sapo').val();
            var order =$('#order').val();
            var number=/^[0-9]+$/;
            if (!name=="") {
               if (!sapo=="") {
                    if (!order=="") {
                        if (number.test(order)==true) {
                            
                            $( "#content_dialog" ).html( "<h4>Tên danh mục: "+name+"<br>"+"Tên tiếng anh: "+sapo+"<br>"+"Thứ tự: "+order+"</h4>" ); 
                            $( function() {
                            $( "#dialog" ).dialog();
                             } );
                            
                            
                                $('#noidung').append('<tr td id="xoa_hihi_'+i+'"><td>'+i+'</td><td>'+name+'</td><td>'+sapo+'</td><td>'+order+'</td><td><span id="hihi" onclick="test_'+i+'()"><a   href="#"><i  class="fa fa-trash" style="font-size: 2rem;color: red;" aria-hidden="true"></i></a></span></td><tr>');
                                i++;
                               
                            
                            $('#name').val('');
                            $('#sapo').val('');
                            $('#order').val('');
                            $( "#danhsach" ).slideUp( 300 ).delay( 700 ).fadeIn( 1000 );
                            $('#hienthem').show();
                            
                        }else{
                            alert('Thứ tự phải là số');
                        }
                    }else{
                        alert('Bạn chưa nhập thứ tự');
                    }
                }else{
                    alert('Bạn chưa nhập tên danh mục tiếng anh');
                }
            }else{
               
                alert('Bạn chưa nhập tên danh mục');
                
            }
            
            
        }
        
   
       
        $( ".ui-button" ).click(function() {
          alert( "Handler for .click() called." );
        });
         
       
        /*function change(){
            $('#themmoi').hide();
            $('#danhsach').show();
         }*/


        /* baiviet_script */
         function add_baiviet(){
            var name =$('#name').val();
            var name_eng =$('#name_eng').val();
            var content =$('#content').val();
            var content_eng =$('#content_eng').val();
            var check_img=$('input[type=file]').val();
            if (!name=="") {
               if (!name_eng=="") {
                    if (!content=="") {
                        if (!content_eng=="") {
                            if (!check_img=="") {
                                 if (!check_img=="") {
                                var img=$('input[type=file]')[0].files[0].name;
                                alert('Bạn đã thêm thành công bài viết');
                                $('#name_noidung').html(name);
                                $('#name_noidung_eng').html(name_eng);
                                $('#content_noidung').html(content);
                                $('#content_noidung_eng').html(content_eng);
                                $('#img_noidung').append('<img id="img_xoa" src="image/'+img+'">');
                                $('#themmoi').fadeOut( 1000 );
                                $( "#noidung" ).slideUp( 1100 ).delay( 1300 ).fadeIn( 1000 );

                            }else{
                                alert('Bạn chưa chọn ảnh');
                            
                            }
                            }else{
                                alert('Bạn chưa chọn ảnh');
                            }
                        }else{
                            alert('Bạn chưa nhập nội dung tiếng anh');
                        }
                    }else{
                        alert('Bạn chưa nhập nội dung');
                    }
                }else{
                    alert('Bạn chưa nhập tên bài viết tiếng anh');
                }
            }else{
               
                alert('Bạn chưa nhập tên bài viết');
                
            }
        }
        function sua(){
            $('#noidung').fadeOut( 1000 );
            $( "#themmoi" ).slideUp( 1100 ).delay( 1300 ).fadeIn( 1000 );
            $('#img_xoa').remove();
        }