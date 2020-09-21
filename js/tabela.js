$(document).ready(function(){
    
    
    $.tablesorter.addParser({
		id: 'datetime',
		is: function(s) {
			return false; 
		},
		format: function(s,table) {
			s = s.replace(/\-/g,"/");
			s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$2/$1");
			return $.tablesorter.formatFloat(new Date(s).getTime());
		},
		type: 'numeric'
	});

    

	var $table = $('#table').tablesorter({
		
		headers: { 
            
           2: {
                // tipo de ordenação de data na coluna 1 (começa do 0)
                sorter: 'datetime' 
            },
            
       },
		// Formato de data
		dateFormat: 'dd/mm/yyyy',
		widgets: ["zebra", "filter"],
		widgetOptions : {
		  filter_columnFilters: false,
		  filter_saveFilters : true,
		  filter_reset: '.reset'
		}
	  });

	      //. filter (função para filtrar a tabela)
		  // . bind Search (função para filtrar a tabela atraves de uma dado externo)
		  // .bindSearch ( tabela , fonte do dado externo ) 
	$.tablesorter.filter.bindSearch( $table, $('.search') );

})