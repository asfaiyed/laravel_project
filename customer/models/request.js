var db = require('./db');

module.exports ={

	get: function(id, callback){
		var sql = "select * from schedule where id=?";
		db.getResults(sql, [id], function(result){
			if(result.length > 0){
				callback(result[0]);
			}else{
				callback([]);
			}
		});
	},



	getAll: function(callback){
		var sql = "select * from schedule";
		db.getResults(sql, null, function(result){
			if(result.length > 0){
				callback(result);
			}else{
				callback([]);
			}
		});
	},
	

getByUname: function(username, callback){
		var sql = "select * from salary where teacher_name='"+username+"'";
		db.getResults(sql, function(results){
			if(results.length > 0){
			
				console.log(results);
				callback(results[0]);
			}else{
				callback(null);
			}
		});
	},
	



	insert: function(user, callback){
		var sql = "insert into request values(?, ?)";

		

		db.execute(sql, [user.id, user.uname], function(status){
			if(status){
				callback(true);
			}else{
				callback(false);
			}
		});
	},

	
