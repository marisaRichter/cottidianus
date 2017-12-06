$(document).ready(function(){
    $("#selectize").selectize();

    $('.bt-save-emoji').click(function(){
      var value_emoji = $('#my-icon-select-box-scroll .selected img').attr('icon-value');
      console.log('teste' + value_emoji);
      $('.emoji-input').val(value_emoji);
    });
    
    $('#datepicker').pickadate({
      formatSubmit: 'yyyy/mm/dd',
      hiddenName: true,
      selectYears: true,
      selectMonths: true
    });
});
