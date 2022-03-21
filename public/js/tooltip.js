function myFunction() {
    var copyText = document.getElementById("form_num");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "yeah! Form number { "+ copyText.value +" } has been copied, please save it, you will need for futher processing";
  }
  
  function outFunc() {
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "click the form number to Copy ";
  }