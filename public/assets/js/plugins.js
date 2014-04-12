/* file:           plugins.js
 * version:        1.2
 * last changed:   13.02.2014
 * description:    All template plugins included in this file 
*/

$(document).ready(function(){

    /* page toolbar tabs */
    $(".page-toolbar-tabs a").click(function(){
        var pli = $(this).parent("li");
        var act = $($(this).attr("href"));
        
        $(".page-toolbar-tabs li,.page-toolbar-tab").removeClass("active");
        pli.addClass("active");
        act.addClass("active");
    });
    /* eof page toolbar tabs */
    
    /* daterangepicker */
    if($(".daterange").length > 0)
        $(".daterange").daterangepicker({format: 'YYYY-MM-DD',startDate: '2013-01-01',endDate: '2013-12-31'});    
    /* eof daterangepicker */
    
    /* Summernote */
    if($(".editor").length > 0)
        $(".editor").summernote({height: 300});
    
    $("#email_editor").on("click",function(){
        $("#email_editor").summernote({height: 300,focus: true});
        $(".page-content").mCustomScrollbar("update");
    });
    /* eof Summernote */

    /* Fancybox */
    if($(".fancybox").length > 0)
       $(".fancybox").fancybox({padding: 5});
    /* EOF Fancybox */    
    
    /* jQuery */
    
        /* datepicker */
        if($(".datepicker").length > 0)
            $(".datepicker").datepicker({nextText: "", prevText: "",showOtherMonths: true, selectOtherMonths: true, dateFormat: "yy-mm-dd"});
        if($(".mdatepicker").length > 0)
            $(".mdatepicker").datepicker({nextText: "", prevText: "", numberOfMonths: 3, dateFormat: "yy-mm-dd"});        
        /* eof datepicker */
        
        /* datepicker */
        if($(".timepicker").length > 0)
            $(".timepicker").timepicker({showButtonPanel:false});
        if($(".datetimepicker").length > 0)
            $(".datetimepicker").datetimepicker({showButtonPanel:false});        
        /* eof datepicker */

        /* Accordion */
        if($(".accordion").length > 0){
           $(".accordion").accordion({heightStyle: "content"});           
           $(".accordion .ui-accordion-header:last").css("border-bottom","0px");
        }    
        /* EOF Accordion */  
        
    /* eof jQuery */
    
    /* bootstrap tooltip */    
        $(".tip").tooltip({placement: 'top'});    
        $(".tipb").tooltip({placement: 'bottom'});    
        $(".tipl").tooltip({placement: 'left'});        
        $(".tipr").tooltip({placement: 'right'});
    /* eof bootstrap tooltip */
    
    /* bootstrap popover */
    $("[data-toggle=popover]").popover();
    /* eof bootstrap popover */
    
    /* mCustomScrollbar */    
    $(".page-content,.page-navigation").mCustomScrollbar({autoHideScrollbar: true,scrollInertia: 20, advanced: {autoScrollOnFocus: false}});
    
    if($(".scroll").length > 0) 
       $(".scroll").mCustomScrollbar({autoHideScrollbar: true, advanced: {autoScrollOnFocus: false}});
    
    $(".modal").on("shown.bs.modal",function(){
        $(this).find(".scroll").mCustomScrollbar("update");
    });        
    /* eof mCustomScrollbar */
    
    /* sparkline */
    if($(".sparkline").length > 0)
        $(".sparkline").sparkline('html', { enableTagOptions: true,disableHiddenCheck: true});    
    /* eof sparkline */
    
    /* select2*/
    if($(".select2").length > 0) 
        $(".select2").select2();
    /* eof select2*/
    
    /* tagsinput */
    if($(".tagsinput").length > 0)
        $(".tagsinput").tagsInput({width: '100%',height:'auto'});
    /* eof tagsinput */
    
    /* icheck */        
    if($("input.icheck").length > 0) 
        $(".icheck").iCheck({checkboxClass: 'icheckbox_flat', radioClass: 'iradio_flat'});
    
        /* IMPORTANT: If you use only default icheck than this part code can be removed from here --> */
        if($("input.icheck-red").length > 0) 
            $(".icheck-red").iCheck({checkboxClass: 'icheckbox_flat-red', radioClass: 'iradio_flat-red'});
        if($("input.icheck-grey").length > 0) 
            $(".icheck-grey").iCheck({checkboxClass: 'icheckbox_flat-grey', radioClass: 'iradio_flat-grey'});
        if($("input.icheck-blue").length > 0) 
            $(".icheck-blue").iCheck({checkboxClass: 'icheckbox_flat-blue', radioClass: 'iradio_flat-blue'});
        if($("input.icheck-orange").length > 0) 
            $(".icheck-orange").iCheck({checkboxClass: 'icheckbox_flat-orange', radioClass: 'iradio_flat-orange'});
        if($("input.icheck-pink").length > 0) 
            $(".icheck-pink").iCheck({checkboxClass: 'icheckbox_flat-pink', radioClass: 'iradio_flat-pink'});
        if($("input.icheck-purple").length > 0) 
            $(".icheck-purple").iCheck({checkboxClass: 'icheckbox_flat-purple', radioClass: 'iradio_flat-purple'});
        if($("input.icheck-yellow").length > 0) 
            $(".icheck-yellow").iCheck({checkboxClass: 'icheckbox_flat-yellow', radioClass: 'iradio_flat-yellow'});
        if($("input.icheck-green").length > 0) 
            $(".icheck-green").iCheck({checkboxClass: 'icheckbox_flat-green', radioClass: 'iradio_flat-green'});
        if($("input.icheck-aero").length > 0) 
            $(".icheck-aero").iCheck({checkboxClass: 'icheckbox_flat-aero', radioClass: 'iradio_flat-aero'});    
        /* <-- To Here :) */
        
    /* eof icheck */
    
    /* validation */
    if($("#validate").length > 0 || $("#validate_custom").length > 0)
        $("#validate, #validate_custom").validationEngine('attach',{promptPosition : "topLeft"});        
    /* eof validation */
    
    /* Masked Input */
    if($("input[class^='mask_']").length > 0){
        $("input.mask_tin").mask('99-9999999');
        $("input.mask_ssn").mask('999-99-9999');        
        $("input.mask_date").mask('9999-99-99');
        $("input.mask_product").mask('a*-999-a999');
        $("input.mask_phone").mask('99 (999) 999-99-99');
        $("input.mask_phone_ext").mask('99 (999) 999-9999? x99999');
        $("input.mask_credit").mask('9999-9999-9999-9999');        
        $("input.mask_percent").mask('99%');
    }    
    /* EOF Masked Input */    
    
    /* Datatables */
    if($("table.sortable_simple").length > 0)
        $("table.sortable_simple").dataTable({"iDisplayLength": 5,"bLengthChange": false,"bFilter": false,"bInfo": false,"bPaginate": true});
    
    if($("table.sortable_default").length > 0)
        $("table.sortable_default").dataTable({"iDisplayLength": 5, "sPaginationType": "full_numbers","bLengthChange": false,"bFilter": false,"bInfo": false,"bPaginate": true, "aoColumns": [ { "bSortable": false }, null, null, null, null]});
    
    if($("table.sortable").length > 0)
        $("table.sortable").dataTable({"iDisplayLength": 5, "aLengthMenu": [5,10,25,50,100], "sPaginationType": "full_numbers", "aoColumns": [ { "bSortable": false }, null, null, null, null]});    
    /* EOF Datatables */
    
    /* Spinner */
    $(".spinner").spinner();
        /* this samples can be removed */
        $("#spinner2").spinner({step: 0.1});
        $("#spinner3").spinner({min: 0,max: 2500,step: 25.15,numberFormat: "C"});   
        /* eof this samples can be removed */
    /* eof Spinner */
    
    /* knob plugin */
    if($(".knob").length > 0) $(".knob input").knob();
    /* eof knob plugin */
    
    /* My Custom Progressbar */
    $.mpb = function(action,options){

        var settings = $.extend({
            state: '',            
            value: [0,0],
            position: '',
            speed: 20,
            complete: null
        },options);

        if(action == 'show' || action == 'update'){
            
            if(action == 'show'){
                $(".mpb").remove();
                var mpb = '<div class="mpb '+settings.position+'">\n\
                               <div class="mpb-progress'+(settings.state != '' ? ' mpb-'+settings.state: '')+'" style="width:'+settings.value[0]+'%;"></div>\n\
                           </div>';
                $('body').append(mpb);
            }
            
            var i  = $.isArray(settings.value) ? settings.value[0] : $(".mpb .mpb-progress").width();
            var to = $.isArray(settings.value) ? settings.value[1] : settings.value;            
            
            var timer = setInterval(function(){
                $(".mpb .mpb-progress").css('width',i+'%'); i++;
                
                if(i > to){
                    clearInterval(timer);
                    if($.isFunction(settings.complete)){
                        settings.complete.call(this);
                    }
                }
            }, settings.speed);

        }

        if(action == 'destroy'){
            $(".mpb").remove();
        }                
        
    }
    /* Eof My Custom Progressbar */
    
    // new selector case insensivity        
     $.expr[':'].containsi = function(a, i, m) {
         return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
     };        
    //  
    
});
