var searchApp = angular.module("searchApp", []);

searchApp.controller("searchCtrl", function($scope){
	$scope.query;
	$scope.objContent = [
		{
			title: "Scribe - Web - Android - NodeJS - ReactJS",
			redirect: true,
			hint: "JS, JavaScript, Java",
			img:"https://lh3.googleusercontent.com/j_KjS-t5LUZRMr2bHNONyYZFElXCuf3Nm6w-nc8UwQhTGZH8FPm07UWkDO9eldTuLrE=w300-rw",
			imgURL: "https://play.google.com/store/apps/details?id=com.dc.scribe",
			content:`An image sharing social network designed for mobile and web
						- Architect and built the entire mobile and web infrastructure
						- Implemented the REST API backend with NodeJS/Express and the
						front-end with React Redux
						- All web features utilize SocketIO for real time responses
						- Token based authentication, mobile and web accounts synchronized
						- Deployed on AWS EC2, S3 and available on GooglePlay`
		},
		{
			title: "Android - LibGDX - Elemental Jumper",
			redirect: true,
			img: "img/ejicon.png",
			imgURL: "https://play.google.com/store/apps/dev?id=7636237194946058419",
			content: "Developed an open source 2D jumping game for Android using Java and LibGDX as the API. Published on Google Play."
		},
		{
			title: "MeetUp - Web App - PHP - JavaScript",
			redirect: true,
			hint: "JS",
			img:"img/meetup.png",
			imgURL: "https://groupmeetup.herokuapp.com/join.php",
			content:"Real time geolocation and chat room for a group of users, users can create a custom room for members to join. Direction routing for the main user. Implemented in JavaScript, PHP, MySQL, BootStrap, HTML5 and utilizes Google Maps API. Deployed on Heroku."
		},
		{
			title: "Post It - Web App - NodeJS - MongoDB",
			redirect: true,
			hint: "JS, JavaScript",
			img:"img/post_it.png",
			imgURL: "http://lets-post-it.herokuapp.com",
			content:"Developed an article site that allows registered users to post/edit articles and comment on them. Authenticated with Passport and follows RESTful routing conventions. Implemented with the MEAN stack"
		},
		{
			title: "C++ - Maze Game - SFML 2.3",
			redirect: false,
			img: "img/maze1.jpg",
			imgURL: "#dialog1",
			content: "Developed a basic maze game using the SFML graphics library.The goal is to move the cyan player to the green box. The maze is generated using a randomized depth-first search recursive backtrack algorithm. The path finder is implemented using breadth first search on a grid based map system."
		},
		{
			title: "Android - Random Chooser",
			redirect: true,
			hint: "Java",
			img: "img/ic_launcher.png",
			imgURL: "https://play.google.com/store/apps/dev?id=7636237194946058419",
			content: "Developed an Android app that allows users to enter choices and randomly selects one for them. Option of generating X list of random numbers given a range. Published on Google Play."
		},
		{
			title: "C++ - Autocompleter",
			redirect: false,
			img: "img/ac0.jpg",
			imgURL: "#dialog2",
			content: "Developed an efficient word auto completer using a prefix tree (Trie). This program will find all auto completions in memory for any given prefix"
		},
		{
			title: "C++ - Freeroam Game - OpenGL (on-going)",
			redirect: false,
			img:"img/fr1.jpg",
			imgURL: "#dialog",
			content:"Worked with a partner to develop a 2D top-down open-world game, similar to Grand Theft Auto. The pathing of the pedestrian is implemented using a player tracking and check point coordinate system. Player can rotate 360 degrees relative to the position of the mouse coordinates."
		},
		{
			title: "Forecast SPA - Web App - AngularJS",
			redirect: true,
			hint: "JS, JavaScript",
			img:"img/weatherapp.jpg",
			imgURL: "http://cheung-david.github.io/Forecast/#",
			content:"Single page weather application, displays the temperature and weather of any region. Implemented in AngularJS and HTML5"
		},
		{
			title: "Android - myWeather",
			redirect: true,
			hint: "Java",
			img: "https://lh3.googleusercontent.com/QMDxpKhPzApoLKAn_oEefueUIJtK4OHPVzKOZyZJr2mekCemWzgbvtOfsJmcyfj_xIo=w300-rw",
			imgURL: "https://play.google.com/store/apps/details?id=com.cheung.david.weather",
			content:"Developed an Android App that that displays the daily weather at your current location with times specified."
		}
	];
});