<script>
        $(document).ready(function() {
          console.log("Powered By LENGKOMEDIA.com")
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".daftar-isi"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID
            
            var a = 1; //initlal text box count
            var no = 1;
            // console.log($('.skema').last().find('.namefield').attr('name'))
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(a < max_fields){ //max input box allowed
                    a++; //text box increment
                    // console.log($('.skema').last().find('.namefield').attr('name'))
                    var fieldbaru = $('.skema').last().find('.namefield').attr('name')
                    
                    no++;
                    var tes = fieldbaru.replace(fieldbaru,'field[field'+no+']');
                    // console.log(tes);
                    // source: "/tes"

                    var append_wrapper = `
                      <div class="row skema">
                        <div class="col-xs-4 col-md-3 col-lg-3">
                          <input class="form-control namefield" onkeyup="nospaces(this)" type="text" name="`+tes+`[key]" placeholder="Field Name" required>
                        </div>
                        <div class="col-xs-4 col-md-3 col-lg-3">
                          <select class="form-control select2 select_type" name="`+tes+`[value]" style="width: 100%;" id="type">
                            @isset($data_opsigroup) @foreach($data_opsigroup as $databaru)
                                <optgroup label="{{ $databaru->option_grup }}">
                                  @isset($data_opsi) @foreach($data_opsi as $opsi)
                                      @if($opsi->skemaopsigroup_id == $databaru->id)
                                      <option value="{{ $opsi->name_opsi }}">{{ $opsi->value_opsi }}</option> 
                                      @endif 
                                    @endforeach 
                                  @endisset
                                </optgroup>
                              @endforeach 
                            @endisset
                          </select>
                        </div>
                        <p class="add_array">
                          <a class="remove_field">
                            <button type="button" class="baten baten-danger"><i class="fa fa-remove"></i> Delete parents field</button>
                          </a>
                        </p>                      
                        <p class="input_array">
                        </p>
                      </div>
                    `;

                    $(wrapper).append(append_wrapper).find('.select_type').select2();  
            }else{
              swal('Anda sudah tidak bisa menambah field baru karena batas maksimal.')
            }
        });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parents('.skema').remove(); a--;
            })

            

        });
  $(document).on('change', '.select_type' ,function() {
    // alert( this.value );
    var value_select_type = this.value;
    if(value_select_type == 'array') {
      $(this).parents(".skema").find(".add_array").append("<a class='skema_add_field' title='Add New Array'><button type='button' class='baten baten-primary'><i class='fa fa-plus'></i> New Child Field</button></a>");
      // $(this).parents(".skema").find(".add_array").append("<a class='skema_add_field btn btn-primary' title='Add New Array' ><i class='fa fa-plus'></i></a>");
      } else {
        // console.log($(this).parents(".add_array").find(".skema_add_field").remove()) 
        // $(this).parent(".skema").find(".skema2").remove()
        $(this).parents(".skema").find(".skema_add_field").remove()
        $(this).parents(".skema").find(".skema2").empty()
        (this).parents(".skema").find(".skema3").empty()
        $(this).parents(".skema").find(".array3").empty()
        // console.log("wad")
         // console.log($(this).find(".skema2").remove())
        // console.log($(this).parents(".skema3").find(".new_form2").remove())
      }
  })
</script>
<script type="text/javascript">
          var x = 1;
          // x++
          $(this.document).on("click",".remove_array", function(e){ //user click on remove text
                // alert('Yakin untuk menghapus?')
                var w = e.preventDefault(); $(this).parents('.skema4'); x--;
                // $(this).parent('.skema4').find('.remove_array').addClass( "highlight" );
                var cari_button = $(this).parents('.array3').find('.remove-button')
                var cari_classhps = cari_button.append('').attr('class')
                var wow = cari_classhps.split('remove-button')
                var wow1 = wow[1].split(' ');
                // console.log(wow[1])
                var cari_a1 = $(this).parents('.skema').find('.form-skema.'+wow1[1]+'').remove()
                x--;
            })

  function guid() {
    function s4() {
      return Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1);
    }
    return s4() + s4();
  }

          $(document).on('click', '.skema_add_field' ,function() {
            var isi = $(this).parents(".skema").find(".select_type").val()
            // alert($(isi))
            if(x < 21) {
              x++;

              var search_field = $(this).parents('.skema').find('.select_type').attr('name')
              // console.log("HOI:"+search_field);
              var parent_key = guid();

              var skema2 = `
              
              <div class="form-skema d`+x+`">
                <div class="col-xs-3 col-md-3 col-lg-3"></div>
                <div class="col-xs-4 col-md-3 col-lg-3 skema2">
                  <div class="new_form d`+x+` form-group">
                    <input id="`+parent_key+`" class="get_input form-control" name="`+search_field+`[key][`+parent_key+`]" onkeyup="nospaces(this)" type="text" placeholder="New Field `+isi+`" required/>
                  </div>
                </div>

                <div class="col-xs-4 col-md-3 col-lg-3 skema3">
                  <div data-id="d`+x+`" class="new_form2 d`+x+` wowd`+x+` form-group">
                    <p>
                      <select class="form-control new_select select2 d`+x+` ce`+parent_key+`" name="`+search_field+`[value][`+parent_key+`]" style="width: 100%;" id="type">
                        @isset($data_opsigroup) 
                          @foreach($data_opsigroup as $databaru)
                            <optgroup label="{{ $databaru->option_grup }}">
                              @isset($data_opsi) 
                                @foreach($data_opsi as $opsi) @if($opsi->name_opsi == 's') @elseif($opsi->skemaopsigroup_id == $databaru->id)
                                    <option value="{{ $opsi->name_opsi }}">{{ $opsi->value_opsi }}
                                    </option> 
                                  @endif 
                                @endforeach
                              @endisset
                            </optgroup>
                          @endforeach 
                        @endisset
                      </select>
                    </p>
                  </div>
                </div>

                <div class="col-md-2 col-lg-2 skema4">
                  <p class="array3 ed`+x+`">
                    <a href="#" class="baten baten-danger remove_array remove-button d`+x+`"><i class="fa fa-remove"></i></a>
                  </p>
                </div>
                      <div class="col-xs-12 col-md-12 col-lg-12"></div>
                      
                <div class="form-baru-skema skmd`+x+`">
                  <div class="col-xs-6 col-md-6 col-lg-6"></div>
                  <div class=" col-md-3 col-lg-3"></div>
                  <div class="col-md-3 col-lg-3"></div>
                </div>
                  
                
              </div>
              `;
              $(this).parents(".skema").find(".input_array").append(skema2); //add input box

              // var skema3 = `
                
              // `;

              // $(this).parents(".skema").find(".skema3").append(skema3)
              var haha = $(this).parents(".skema").find(".skema3")
              $(haha).find(".select2").select2()

              // var skema4 = `
                

              // `;
              // $(this).parents(".skema").find(".form-skema").append(skema4);
              // // $(this).parents(".skema").find(".skema4").append('');
            }else{
              swal('Anda sudah tidak bisa menambah kolom baru karena batas maksimal.')
            }
          });
</script>
<script type="text/javascript">
  $(document).on('change', '.new_select' ,function() {
     // alert( this.value );
     var value_select_type = this.value;
     if(value_select_type == 'array') {

      var a = $(this).parents('.skema').find('.form-skema')
      var a_cari = $(this).attr('class').split(' ')[3]
      // console.log(a_cari)
      // var b = $(a).find('.new')
      var split = $(a).find('.array3').attr('class').split('d')
      var classnya = 'd'+split[1];
      // alert(a_cari)
      var form_id = $(this).parents('.form-skema').find('.get_input').attr('id');
      $(a).find('.e'+a_cari).append('   <a class="baten baten-primary skema_new_field '+a_cari+'" title="Add New Array" data-key="'+form_id+'"><i class="fa fa-plus"></i></a>')
      var cari_sblm = $(this).parents('.skema').find('.form-skema')
      var cari_sblm2 = $(cari_sblm).find('.skema3').find('.e'+a_cari)
      var cari_class = $(cari_sblm2).data('id')
      // console.log(cari_sblm2)
      // alert(cari_sblm2)
    } else {
        var data_id2 = $(this).data('key');
        var cari_classhps = $(this).append('').attr('class')
        var wow = cari_classhps.split('new_select')
        var wow1 = wow[1].split(' ')
        // console.log(wow1[2])
        // var cari_a1 = $(this).parents('.skema').find('.form-skema.'+wow1[1]+'').remove()
        $(this).parents('.skema').find('.form-skema').find('.skema_new_field.'+wow1[2]+'').remove('.skema_new_field.'+wow1[2]+'')
        $(this).parents('.skema').find('.form-skema').find('.form-baru-skema.skm'+wow1[2]+'').empty()
    }
  })

  function get_data(){
    return "wa";
      $('.get_input').on('keyup', function (){
        inputnya = $('.get_input').val()
        return inputnya
        // alert(inputnya)
        // window.input_nya = inputnya
      })
  }

var x = 1;
// x++
$(this.document).on("click",".remove_array_child", function(e){ //user click on remove text
      // alert('Yakin untuk menghapus?')
      var w = e.preventDefault(); $(this).parents('.skema4'); x--;
      // $(this).parent('.skema4').find('.remove_array').addClass( "highlight" );
      var cari_button = $(this).parents('.form-baru-skema').find('.remove_array_child')
      // console.log($(this))
      var cari_classhps = $(this).append('').attr('class')
      var wow = cari_classhps.split('remove-button-child')
      var wow2 = wow[1]
      var wow3 = wow2.split(' ')
      // console.log(wow3[2])

      $(this).parents('.form-baru-skema').find('.'+wow3[2]+'').remove()
      x--;
  })

  function guid2() {
    function s4() {
      return Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1);
    }
    return s4() + s4();
  }

  $(document).on('click', '.skema_new_field', function(){
   
    if(x < 21){
      x++;
      // console.log($(this))
      var ambil_class = $(this).attr('class').split(' ')[3]
      // console.log(ambil_class)
      // var hehe = $('<div class=" col-md-3 col-lg-3 skema-baru2 '+ambil_class+'">Ganteng</div>').insertAfter($(this).parents('.form-skema').find('.skm'+ambil_class+''))

      var search_field = $(this).parents('.skema').find('.new_select').attr('name')
      var diganti = search_field.split('[]')[0]
      // console.log(search_field)
      // console.log("WA"+diganti)
      // console.log(diganti+'[array][]') 
      // console.log(diganti)
      var diganti2 = diganti.split('[value]')[0]
      var data_id2 = $(this).data('key');
      var guid = guid2();

      var inputnya_1 = `
        <div class="col-xs-6 col-md-6 col-lg-6 si`+guid+` ce`+data_id2+`"></div>
        <div class="col-md-2 col-lg-2 skema-baru2 `+ambil_class+` si`+guid+`  ce`+data_id2+`">
          <div class="form-group">
            <input class="get_input form-control" name="`+diganti2+`[value][value][`+data_id2+`][key][]" onkeyup="nospaces(this)" type="text" placeholder="New Field array" required/>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 skema-baru3 `+ambil_class+` si`+guid+`  ce`+data_id2+`">
          <div class="form-group">
            <p><select class="form-control select2 d`+x+`" name="`+diganti2+`[value][value][`+data_id2+`][value][]" style="width: 100%;" id="type">
              @isset($data_opsigroup) 
                @foreach($data_opsigroup as $databaru)
                  <optgroup label="{{ $databaru->option_grup }}">
                    @isset($data_opsi) 
                      @foreach($data_opsi as $opsi) @if($opsi->name_opsi == 'array') @elseif($opsi->skemaopsigroup_id == $databaru->id)
                          <option value="{{ $opsi->name_opsi }}">{{ $opsi->value_opsi }}
                          </option> 
                        @endif 
                      @endforeach
                    @endisset
                  </optgroup>
                @endforeach 
              @endisset
            </select></p>
          </div>
        </div>
        <div class="col-md-1 col-lg-1 skema-baru4 `+ambil_class+` si`+guid+`  ce`+data_id2+`">
          <div class="form-group">
            <p class="hps_child_child `+ambil_class+`">
              <a href="#" class="baten baten-danger remove_array_child remove-button-child `+ambil_class+` si`+guid+`"><i class="fa fa-remove"></i></a>
            </p>
          </div>
        </div>
      `;
      $(this).parents('.form-skema').find('.skm'+ambil_class+'').append(inputnya_1)
      var gift_select2 = $(this).parents(".skema").find(".skema-baru3")
      $(gift_select2).find(".select2").select2()
    }else{
      swal('Anda sudah tidak bisa menambah kolom baru karena batas maksimal.')
    }
  })
</script>