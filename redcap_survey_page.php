<?php

//function redcap_survey_page($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id, $repeat_instance){

?>

<style>
/* Button */
.bn49 {
  border: 0;
  text-align: center;
  display: inline-block;
  padding: 10px;
  width: 130px;
  margin: 20px;
  color: #ba3837;
  background-color: #f0bb74;
  border-radius: 12px;
  font-family: "proxima-nova-soft", sans-serif;
  font-weight: 700;
  font-size: 16px;
  text-decoration: none;
  transition: box-shadow 200ms ease-out; 
  }
</style>

<!--Start Over Button-->
               <button id="myButton" class="bn49">Start Over &nbsp;<i class="fas fa-sync-alt"></i></button>

               <script type="text/javascript">
                    document.getElementById("myButton").onclick = function () {
                        location.href = "Enter_HTML_Landing_Page_URL_Here";
                    };
               </script>

<!--Bypass "Leave Page" popups-->
				<script type="text/javascript">
					window.onbeforeunload = null;
				</script>
