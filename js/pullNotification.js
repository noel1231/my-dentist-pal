$(function(){
	// pullNotification();
});
 
function pullNotification(timestamp){
	var data = {};
	if(typeof timestamp!='undefined')
		data.timestamp = timestamp;
 
	$.post('longpoll',data,function(msg){
 
		var newData = '';
		for(i in msg.notifications){
			newData+=msg.notifications[i].message+'\n';
		}
		if(newData!='')
			alert(newData);
		pullNotification(msg.timestamp);
	},'json');
}
