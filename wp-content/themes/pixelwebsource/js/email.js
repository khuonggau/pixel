function sendEmailContact(){
				var name = document.getElementById("contact_last_name").value;
				var phone = document.getElementById("contact_phone").value;
				var email = document.getElementById("contact_email").value;
				var description = document.getElementById("contact_desc").value;

				var subject = "PIXEL WEBSOURCE ADMIN";
				var body = name + " Registered!<br> " + "Phone: " + phone + "; Email: " + email + "; Description: " + description;
				
				$.ajax({
			      type: 'POST',
			      url: 'https://mandrillapp.com/api/1.0/messages/send.json',
			      data: {
			        'key': '2wH8RLcQZDYYPTif_o0pPA',
			        'message': {
			          'from_email': 'info@pixelwebsource.com',
			          'to': [
			          	  {
			                'email': 'info@pixelwebsource.com',
			                'name': 'Tuan Anh',
			                'type': 'to'
			              },
			              {
			                'email': 'seannguyen408@gmail.com',
			                'name': 'Phat',
			                'type': 'to'
			              },
			              {
			                'email': 'tuananh.nguyen.freelance@gmail.com',
			                'name': 'Tuan Anh',
			                'type': 'to'
			              }
			            ],
			          'autotext': 'true',
			          'subject': subject,
			          'html': '<p>' + body + '</p>',
			        }
			      }
			     }).done(function(response) {
			       console.log(response); // if you're into that sorta thing
			       window.location.href = "/thank-you/"
			     });
							// $.ajax({
						 //      type: "POST",
						 //      contentType: "text/plain",
						 //      url: "http://www.mandrillapp.com/api/1.0/messages/send-raw.json",
						 //      data: {
							// 		"key": "2wH8RLcQZDYYPTif_o0pPA",
							// 		"raw_message": "From: info@pixelwebsource.com\nTo: info@pixelwebsource.com\nSubject: " + subject + "\n\n " + body + ".",
							// 	   	"from_email": "info@pixelwebsource.com",
							// 	   	"from_name": "PIXEL WEBSOURCE ADMIN",
							// 	   	"to": [
							// 	        "seannguyen408@gmail.com"
							// 	    ],
							// 	    "async": false,
							// 	    "ip_pool": "Main Pool",
							// 	},
						 //      success: alert("Sent email to PIXEL admin successfully!"),
						 //      dataType: 'json',
						 //      statusCode: {
							//     404: function() {
							//       alert( "page not found" );
							//     },
							//     405: function() {
							//     	alert( "HTTP verb used to access this page is not allowed.");
							//     }
							//   }
						 //  	});

				return false;
			}