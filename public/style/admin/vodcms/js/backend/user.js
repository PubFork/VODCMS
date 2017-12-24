define(['jquery', 'bootstrap', 'backend', 'table', 'form','summernote'], function ($, undefined, Backend, Table, Form) {
    var Controller = {
        index: function () {	
		    Controller.api.bindevent();
        },
        show: function () {
		    $total=$(".pagination-info").attr("total");
			if($total){
			Backend.api.sidebar({'admin/user/show': $total});
			}				
		   Controller.api.bindevent();
        },		
        nav: function () {		
		   Table.api.bindevent();
        },		
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        navedit: function () {
            Controller.api.bindevent();
        },
        navadd: function () {
            Controller.api.bindevent();
        },			
        api: {
            bindevent: function () {
				Table.api.bindevent();
                Form.api.bindevent($("form[role=form]"));
				 $(document).on("click", ".testmail", function (){										   
				 Backend.api.ajax({url: "user/testmail", data: {receiver: $('input[name="info[mail_test]"]').val()}});
                });			
            }
        }
    };
    return Controller;
});