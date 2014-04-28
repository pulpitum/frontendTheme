jQuery( document ).ready(function() {
  
  $('#srch-term').autocomplete({
    serviceUrl: '/search',
    noCache: true,
	width: 300,
	formatResult: function (suggestion, currentValue) {
		return suggestion.category+': <a href="'+suggestion.url+'">'+suggestion.value+'</a>';
	}
});
  
  
  
});