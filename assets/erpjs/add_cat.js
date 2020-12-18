 $("#Addcategory").validate({
    rules: {
      category_name:"required",
     
    },
   messages:{
    category_name:"Please enter Category Name ",
    
   }
    
  });
  
  $("#add_subcats").validate({
    rules: {
      subcategory_name:"required",
     
    },
   messages:{
    subcategory_name:"Please Enter Subcategory Name ",
    
   }
    
  });



  $("#Addcolor").validate({
    rules: {
      color_type:"required",
     
    },
   messages:{
    color_type:"Please enter Colour Name ",
    
   }
    
  });
