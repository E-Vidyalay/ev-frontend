    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });
      function onLoad() {     
  var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['gu'],         
          transliterationEnabled: true
        };   
      
var control = new google.elements.transliteration.TransliterationControl(options);  
var ids = [ "first_name", "last_name" ];  
  control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(onLoad);
    </script>
<input type="text" name="last_name" id="last_name">