<script src="https://static.opentok.com/v2/js/opentok.min.js"></script>

<style>
    .tutor_subscriber {
        margin-top: 202px;
    }
</style>


<?php
if(isset($_POST['start_button'])){
echo $course_id = $_POST['course_id'];
echo "abc";
}
else{

    redirect('/tutor/online-session/', 'refresh');
}



?>
<div id="videos">
    <div id="publisher" class="student_publisher"></div>
    <div id="subscriber" class="tutor_subscriber"></div>
</div>


<script>

    // replace these values with those generated in your TokBox Account
  //  var apiKey = "46155962";
  //  var sessionId = "1_MX40NjE1NTk2Mn5-MTUzMTkyNjc1Mzk2M35adU9OWHpybEUzN2pVNk41K09lNnF3SWx-fg";
  //  var token = "T1==cGFydG5lcl9pZD00NjE1NTk2MiZzaWc9YTU1NGI0NzAzYmFkZDU4YzY1NWYyNjRjZjRlZTE1ZDljMTZlMGRmMDpzZXNzaW9uX2lkPTFfTVg0ME5qRTFOVGsyTW41LU1UVXpNVGt5TmpjMU16azJNMzVhZFU5T1dIcHliRVV6TjJwVk5rNDFLMDlsTm5GM1NXeC1mZyZjcmVhdGVfdGltZT0xNTMxOTI2NzgxJm5vbmNlPTAuNTYyMzA1Nzc3NTAyNjM1MiZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNTM0NTE4Nzc4JmNvbm5lY3Rpb25fZGF0YT1mb3JldmVyJmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9";


    var apiKey = "46156032";
    var sessionId = "2_MX40NjE1NjAzMn5-MTUzMzEyNjkzNTk3MX4wMU5raXR3bGYwcEF2TUNOWnk2aTVoaDh-fg";
    var token = "T1==cGFydG5lcl9pZD00NjE1NjAzMiZzaWc9NjA3YjljODdkZGExNmQyZGEwNzljYjU0NzMzOWJiYTA4MGUwMjNhMzpzZXNzaW9uX2lkPTJfTVg0ME5qRTFOakF6TW41LU1UVXpNekV5Tmprek5UazNNWDR3TVU1cmFYUjNiR1l3Y0VGMlRVTk9XbmsyYVRWb2FEaC1mZyZjcmVhdGVfdGltZT0xNTMzMTI2OTQ3Jm5vbmNlPTAuMzMyNTQ2MjkyMzQyOTg4NyZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNTM1NzE4OTQ3JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9";


    //public static final String API_KEY = "46155962";
    // Replace with a generated Session ID
    // public static final String SESSION_ID = "1_MX40NjE1NTk2Mn5-MTUzMTkyNjc1Mzk2M35adU9OWHpybEUzN2pVNk41K09lNnF3SWx-fg";
    // Replace with a generated token (from the dashboard or using an OpenTok server SDK)
    //public static final String TOKEN = "T1==cGFydG5lcl9pZD00NjE1NTk2MiZzaWc9YTU1NGI0NzAzYmFkZDU4YzY1NWYyNjRjZjRlZTE1ZDljMTZlMGRmMDpzZXNzaW9uX2lkPTFfTVg0ME5qRTFOVGsyTW41LU1UVXpNVGt5TmpjMU16azJNMzVhZFU5T1dIcHliRVV6TjJwVk5rNDFLMDlsTm5GM1NXeC1mZyZjcmVhdGVfdGltZT0xNTMxOTI2NzgxJm5vbmNlPTAuNTYyMzA1Nzc3NTAyNjM1MiZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNTM0NTE4Nzc4JmNvbm5lY3Rpb25fZGF0YT1mb3JldmVyJmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9";



    // Handling all of our errors here by alerting them
    function handleError(error) {
        if (error) {
            alert(error.message);
        }
    }

    // (optional) add server code here

    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }

    var room = '<?php echo $course_id; ?>';
    console.log(room);


    var SERVER_BASE_URL = 'https://strm123.herokuapp.com/room/courseid'+room;
    console.log(SERVER_BASE_URL);
    fetch(SERVER_BASE_URL).then(function(res) {
        return res.json()
    }).then(function(res) {
        apiKey = res.apiKey;
        sessionId = res.sessionId;
        token = res.token;
        initializeSession(apiKey,sessionId);
    }).catch(handleError);

   // initializeSession()

    function initializeSession() {
        var session = OT.initSession(apiKey, sessionId);
        console.log(apiKey);
        console.log(sessionId);
        // Subscribe to a newly created stream
        session.on('streamCreated', function(event) {
            console.log("eventstream");
            console.log(event.stream);
            session.subscribe(event.stream, 'subscriber', {
                insertMode: 'append',
                width: '100%',
                data:'this is tutor',


                height: '100%'
            }, handleError);
        });

        // Create a publisher
        var publisher = OT.initPublisher('publisher', {
            insertMode: 'append',
            width: '100%',
            name:'tutor',
            id: 'dbc8d740-5689-4638-accc-6a66a52a7242',
            hasVideo:'false',
            height: '100%'
        }, handleError);

        // Connect to the session
        session.connect(token, function(error) {
            console.log("publisher");
            console.log(publisher);


            // If the connection is successful, initialize a publisher and publish to the session
            if (error) {
                handleError(error);
            } else {
                session.publish(publisher, handleError);
            }
        });
    }

</script>