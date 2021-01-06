var apiResponse = require("express-api-response");
var express = require('express');
var app 		= express();
var upload = require('express-fileupload');
var db = require.main.require('./models/db');

var userModel = require.main.require('./models/user');
var availableModel = require.main.require('./models/available');
var offeredModel = require.main.require('./models/offered');
var ratingsModel = require.main.require('./models/ratings');

var uploadModel = require.main.require('./models/upload');
var scheduleModel = require.main.require('./models/schedule');

var rnoticesModel = require.main.require('./models/rnotices');
var pnoticesModel = require.main.require('./models/pnotices');

var ctaModel = require.main.require('./models/cta');
var router = express.Router();
var fs = require("fs");
var file_content = fs.readFileSync('./models/jsonexample.json');
var json = JSON.parse(file_content);


router.get('*', function(req, res, next){
	if(req.session.username == null){
		res.redirect('/login');
	}else{
		next();
	}
});


router.get('/', function(req, res){

	
		res.render('home/index', {uname: req.session.username});
	
});

router.get('/upload', function(req, res){
	
	
		
			res.render('home/upload');
		
	
});
router.post('/upload',function(req,res){
	if(req.files){
	
	var file= req.files.file;
	var filename = file.name;
	console.log(filename);
	file.mv('./assets/'+filename, function (err)
	{
		if(err)
		{
			res.send(err);
		}
		else{
			var user ={
			uname 		: filename,
			sname: req.body.sname,
			id		: req.body.id
		}

		uploadModel.insert(user, function(status){
			if(status){
				res.redirect('/home/upload/notes');
			}else{
				res.redirect('/home/upload/notes');
			}
		});
		}
	})
	}
});
router.get('/upload/notes', function(req, res){
	
	
		uploadModel.getAll(function(results){
			res.render('home/notes', { results : results});
		});
	
});
router.get('/upload/notes/delete/:id', function(req, res){
	
	uploadModel.get(req.params.id, function(results){
		res.render('home/notesdelete', {user: results});
	});

});



router.post('/upload/notes/delete/:id', function(req, res){
	
	uploadModel.delete(req.body.id, function(status){
		if(status){
			res.redirect('/home/upload/notes');
		}else{
			res.redirect('/home/upload/notes');
		}
	});
	
});


router.get('/profile', function(req, res){


		var username = req.session.username;
		userModel.getByUname(username, function(results){

			res.render('home/profile', { userList : results, uname: req.session.username});
		});

	
});


router.get('/cta', function(req, res){
	
	
		
			res.render('home/cta');
		

});

router.get('/cta/ctacheck', function(req, res){
	
	
		ctaModel.getAll(function(results){
			res.render('home/ctacheck', { results : results, uname: req.session.username});
		});
	
});

router.get('/schedule', function(req, res){
	
	
		scheduleModel.getAll(function(results){
			res.render('home/schedule', { results : results, uname: req.session.username});
		});
	
});

router.get('/script', function(req, res){
	
	
		examModel.getAll(function(results){
			res.render('home/script', { results : results, uname: req.session.username});
		});
	
});
router.get('/notices/read', function(req, res){
	
	
		rnoticesModel.getAll(function(results){
			res.render('home/read', { userList : results, uname: req.session.username});
		});
	
});
router.get('/notices/post/postednotices', function(req, res){
	
	
		pnoticesModel.getAll(function(results){
			res.render('home/posted', { results : results, uname: req.session.username});
		});
	
});




router.get('/available', function(req, res){
	
	
		availableModel.getAll(function(results){
			res.render('home/available', { userList : results, uname: req.session.username});
		});
	
});

router.get('/offeredproduct', function(req, res){
	
	
		offeredModel.getAll(function(results){
			res.render('home/offered', { userList : results, uname: req.session.username});
		});
	
});

router.get('/customer_info', function(req, res){
	
	
		userModel.customer(function(results){
			res.render('ajax', { userList : results, uname: req.session.username,title: 'An Ajax Example', quote: "please give your require ID ", sc:json.id });
		});
	
});

router.post('/customer_info', function(req, res){
	
	
		userModel.customer(function(results){
			res.render('ajax', { userList : results, uname: req.session.username,title: 'An Ajax Example', quote: req.body.quote, sc:json.id });
		});
	
});
router.get('/ajax', function(req, res){
    res.render('ajax', {title: 'An Ajax Example', quote: "please give your require ID"});
});
router.post('/ajax', function(req, res){
    res.render('ajax', {title: 'An Ajax Example', quote: req.body.quote});
});


router.get('/other_products', function(req, res){
	
	
		userModel.other_products(function(results){
			res.render('home/other_products', { userList : results, uname: req.session.username});
		});
	
});


router.get('/notices', function(req, res){
	
	
		
			res.render('home/notices');
		
	
});

router.get('/ctp', function(req, res){
	
	
		userModel.ctp(function(results){
			res.render('home/ctp', { userList : results, uname: req.session.username});
		});
	
});


router.get('/ratings', function(req, res){
	
	
		ratingsModel.getAll(function(results){
			res.render('home/ratings', { userList : results, uname: req.session.username});
		});
			
		
	
});




router.get('/create', function(req, res){
	
		res.render('home/add');
	
});

router.post('/create', function(req, res){
	
	

		var user ={
			uname 		: req.body.uname,
			password	: req.body.password,
			type		: req.body.type
		}

		userModel.insert(user, function(status){
			if(status){
				res.redirect('/home/view_users');
			}else{
				res.redirect('/home/create');
			}
		});
	
});


router.get('/delete/:id', function(req, res){
	
	userModel.get(req.params.id, function(result){
		res.render('home/delete', {user: result});
	});
	
});





router.post('/delete/:id', function(req, res){
	
	userModel.delete(req.body.id, function(status){
		if(status){
			res.redirect('/home/view_users');
		}else{
			res.redirect('/home');
		}
	});
	
});


router.get('/cta/ctainsert', function(req, res){
	
		res.render('home/ctainsert');
	
});

router.post('/cta/ctainsert', function(req, res){
	
	

		var user ={
			uname 		: req.body.uname,
			
			id		: req.body.id
		}

		ctaModel.insert(user, function(status){
			if(status){
				res.redirect('/home/cta/ctacheck');
			}else{
				res.redirect('/home/cta/ctacheck');
			}
		});
	
});

router.get('/cta/ctacheck/delete/:id', function(req, res){
	
	ctaModel.get(req.params.id, function(result){
		res.render('home/ctadelete', {user: result});
	});
	
});

router.post('/cta/ctacheck/delete/:id', function(req, res){
	
	ctaModel.delete(req.body.id, function(status){
		if(status){
			res.redirect('/home/cta/ctacheck');
		}else{
			res.redirect('/home/cta/ctacheck');
		}
	});
	
});



router.get('/schedule/insert', function(req, res){
	
		res.render('home/insertschedule');
	
});

router.post('/schedule/insert', function(req, res){
	


		var user ={
			uname 		: req.body.uname,
			day	: req.body.day,
			time	: req.body.time,
			id		: req.body.id
		}

		scheduleModel.insert(user, function(status){
			if(status){
				res.redirect('/home/schedule');
			}else{
				res.redirect('/home/schedule');
			}
		});
	
});







router.get('/notices/post', function(req, res){
	
		res.render('home/post');
	
});

router.post('/notices/post', function(req, res){
	

		var user ={
			uname 		: req.body.uname,
			notice	: req.body.notice,
			date	: req.body.date,
			id		: req.body.id
		}

		pnoticesModel.insert(user, function(status){
			if(status){
				res.redirect('/home/notices/post/postednotices');
			}else{
				res.redirect('/home/notices/post/postednotices');
			}
		});
	
});
router.get('/notices/post/postednotices/delete/:id', function(req, res){
	
	pnoticesModel.get(req.params.id, function(result){
		res.render('home/pdelete', {user: result});
	});
	
});

router.post('/notices/post/postednotices/delete/:id', function(req, res){
	
	pnoticesModel.delete(req.body.id, function(status){
		if(status){
			res.redirect('/home/notices/post/postednotices');
		}else{
			res.redirect('/home/notices/post/postednotices');
		}
	});
	
});

router.get('/salary/edit/:id', function(req, res){

	salaryModel.get(req.params.id, function(result){
		res.render('home/sedit', {user: result});
	});
	
});

router.post('/salary/edit/:id', function(req, res){
	
		var user = {
		name: req.body.name,
		salary: req.body.salary,
	
		id: req.params.id
	};

 salaryModel.update(user, function(status){
		if(status){
			res.redirect('/home/salary');
		}else{
			res.redirect('/home/salary');
		}
	});
	
});


router.get('/schedule/edit/:id', function(req, res){
	
	scheduleModel.get(req.params.id, function(result){
		res.render('home/editschedule', {user: result});
	});
	
});

router.post('/schedule/edit/:id', function(req, res){
	
		var user = {
		name: req.body.name,
		day: req.body.day,
		time: req.body.time,
	
		id: req.params.id
	};

 scheduleModel.update(user, function(status){
		if(status){
			res.redirect('/home/schedule');
		}else{
			res.redirect('/home/schedule');
		}
	});
	
});

router.get('/schedule/delete/:id', function(req, res){
	
	scheduleModel.get(req.params.id, function(result){
		res.render('home/deleteschedule', {user: result});
	});
	
});

router.post('/schedule/delete/:id', function(req, res){
	
	scheduleModel.delete(req.body.id, function(status){
		if(status){
			res.redirect('/home/schedule');
		}else{
			res.redirect('/home/schedule');
		}
	});
	
});

router.get('/profile/edit/:id', function(req, res){
	
	userModel.get(req.params.id, function(result){
		res.render('home/pedit', {user: result});
	});
	
});

router.post('/profile/edit/:id', function(req, res){
	
		var user = {
		username: req.body.username,
		password: req.body.password,
		email: req.body.email,
		type: req.body.type,
		gender: req.body.gender,
		education: req.body.education,
	    id: req.params.id
	};

 userModel.update(user, function(status){
		if(status){
			res.redirect('/home/profile');
		}else{
			res.redirect('/home/profile');
		}
	});
	
});

module.exports = router;