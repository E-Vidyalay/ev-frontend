<br/>
<div class="content-card large-12 small-12 large-offset-0 small-offset-0" id="home-content">
<div class="row">
	<h3 class="head-navu">વિશિષ્ટ તત્વો</h3>
	<div class="columns large-2" style="color:black;background-color: #e1f3da;">
		<div class="row">
			<div class="columns large-12">
				<div class="row">
					<div class="columns large-12">
					<h6 align="center" style="background-color:white;padding:3px;margin-top: 10px;">આજનો સુવિચાર</h6>
					</div>
				</div>
			<blockquote>
				<div class="large-12">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<?php
					if($today_thought!=null){
						echo strip_tags($today_thought['Thought']['thought']);	
					}	
					else{
						echo "Those people who think they know everything are a great annoyance to those of us who do";
					}
					?>
					<i class="fa fa-quote-right" aria-hidden="true"></i>
					<cite><?php
					if($today_thought!=null){
						echo $today_thought['Thought']['thinker'];
					}
					else{
						echo "Isaac Asimov";
					}
					?></cite>
				</div>
			</blockquote>
			</div>
		</div>
		<hr style="border: solid #619919;
    border-width: 3px 0 0;" >
		<div class="row">
			<div class="columns large-12">
				<div class="row">
					<div class="columns large-12">
					<h6 align="center" style="background-color:white;padding:3px;margin-top: 10px;">Google Search Engine</h6>
					</div>
				</div>
				<script>
			    (function() {
			    var cx = '011118420518729370922:opcgijryito';
			    var gcse = document.createElement('script'); 
			    gcse.type = 'text/javascript'; 
			    gcse.async = true;
			    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//www.google.com/cse/cse.js?cx=' + cx;
			    var s = document.getElementsByTagName('script')[0]; 
			    s.parentNode.insertBefore(gcse, s);
			})();
			</script>
			<div style="width:0px;overflow:hidden;height:0px;">
			    <gcse:search enableAutoComplete="true"></gcse:search>
			</div>
			<form id="searchbox_011118420518729370922:opcgijryito" action="">
				<div class="row">
    				<div class="small-12">
    					<!-- <div class="row"> -->
        				<div class="small-8 columns">
					    	<input value="011118420518729370922:opcgijryito" name="cx" type="hidden"/>
						    <input value="FORID:11" name="cof" type="hidden"/>
						    <input id="guj-in" name="q" size="75" type="text"/>
						</div>
						<div class="small-4 columns hide-for-small-only">
				    		<button class="right eng-btn button tiny radius"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
						<div class="small-4 columns hide-for-medium-up show-for-small-only">
				    		<button class="eng-btn button tiny radius"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
				    	<!-- </div> -->
			    	</div>
				</div>
			</form>
			</div>
		</div>
	</div>
<div class="columns large-10">
	<div class="row">
	<?php
		foreach ($levels as $key => $value) {
	
		echo '<div class="columns large-3">';
		echo '';
		echo '<div class="level-div" style="background-color:'.$value['Level']['color'].'">';
		echo '<br/>';
		echo '<br/>';
		if($value['Level']['id']=="5568340b-2a04-474b-9568-326f125f2f23"){
			echo '<div align="center">';
			echo '<i class="center kindergarden sprite-60659-200"></i></div>';
		}
		else if($value['Level']['id']=="1308ef4a-1275-11e5-84c6-418bf323d4bd"){
			echo '<div align="center">';
			echo '<i class="primary-edu sprite-60659-200"></i>
			</div>';
		}
		else if($value['Level']['id']=="1308da82-1275-11e5-84c6-418bf323d4bd"){
			echo '<div align="center">';
			echo '<i class="second-edu sprite-60659-200"></i></div>';
		}
		else if($value['Level']['id']=="557d45e1-c154-48a1-91cb-01b9125f2f23"){
			echo '<div align="center">';
			echo '<i class="high-second-edu sprite-60659-200"></i></div>';
		}
		echo '<h4 align="center" style="color:white;">'.$value['Level']['level_name'].'</h4>';
		echo '<div class="overlay" style="background-color:'.$value['Level']['color'].'">
				<ul>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-play-circle-o fa-fw')) . " વિડિઓઝ",array('controller'=>'Pages','action'=>'latest_video',$value['Level']['id']),array('escape' => false,'class'=>'overlay-text')).'</li>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-smile-o fa-fw')) . " હોબીલોબી",array('controller'=>'Pages','action'=>'latest_post',$value['Level']['id']),array('escape' => false,'class'=>'overlay-text')).'</li>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-book fa-fw')) . " ઈ-બૂક",array('controller'=>'Pages','action'=>'latest_ebook',$value['Level']['id']),array('escape' => false,'class'=>'overlay-text')).'</li>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil-square fa-fw')) . " સાહિત્ય લેખ",array('controller'=>'Pages','action'=>'latest_lekh',$value['Level']['id']),array('escape' => false,'class'=>'overlay-text')).'</li>
				<li>'.$this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-question-circle fa-fw')) . 'પ્રશ્નોત્તરી ',array('controller'=>'students','action'=>'test_application'),array('escape' => false,'class'=>'overlay-text')).'</li>
				</ul>
			</div>';
		echo '</div>';
		echo '</div>'; 	
		 } 
	?>
	</div>
	<br/>
<div class="row">
<div class="content-card large-12 small-12 large-offset-0 small-offset-0">
	<div class="gujarati"><span style="font-size: x-large;">પરિચય</span> <button class="right eng-btn button tiny radius">Read in english</button><hr />
<p>શિક્ષણ કોઈ પણ સમાજના પાયામાં હોય છે.અને તે શી રીતે અને કેવી ભાષામાં આપવામાં આવે છે; એની ઉપર એની ફળતાનો આધાર રહેતો હોય છે. જેમ આપણે સૌ &lsquo;ઈ&rsquo; સાથે સંકળાયેલા નવા યુગમાં આગળ ધપતા જઈએ; અને જેમ ઈન્ટરનેટ રોજબરોજની ખરીદી, સંદેશ વ્યવહાર, ટિકેટિંગ, અને એવી ઘણી બધી બાબતોમાં વધારે સક્ષમ પુરવાર થતું જાય છે; તેમ ઈન્ટરનેટના માધ્યમ વડે શીખવાની પદ્ધતિઓ પણ વધારે ને વધારે સાદી અને સરળ બની શકે છે.</p>
<p>શિક્ષણ વધારે સરળ, વધારે રસિક અને ઉપયોગ કરનારને માટે વધારે મૈત્રીભર્યું બનાવવાની દિશામાં ઈ-વિદ્યાલય આવો એક સન્નિષ્ઠ પ્રયાસ છે.</p>
<p>ઓન લાઈન વિડિયો લાયબ્રેરી એ ઈ-વિદ્યાલયનું એક મહત્વનું પાસું છે. તેમાં ગણિત, વેદિક ગણિત, ગુજરાતીમાં શરૂઆતનું શિક્ષણ વિ. ના વિડિયો છે. વપરાશકર્તાઓના અભિપ્રાયોને ધ્યાનમાં રાખીને તેમાં સતત ફેરફાર પણ કરવામાં આવે છે. સમય અને સ્થળની મર્યાદાઓને અતિક્રમીને અનેક વખત પુનરાવર્તન કરી શકાય તે રીતે શિક્ષણ મળી શકે; તે ઈ-વિદ્યાલયનું દર્શન છે. બાળકો અને કિશોર/ કિશોરીઓ પોતાના ઘેર ગમે ત્યારે અને ગમે ત્યાં શીખી શકવા શકવા જોઈએ.</p>
<p>સાથે સાથે શિક્ષણને વધારે આદાન &ndash; પ્રદાન યુક્ત કરવા અને શિક્ષકો અને વાલીઓને વધારે સહાયક બની શકે; તેવાં વિવિધ પ્રકારનાં સાધનો અને રીતો તેમાં ઉમેરી શકાશે. શિક્ષકો પણ આ નવા માધ્યમ દ્વારા પ્રોજેક્ટના આધાર પર અવલંબતા વર્ગ ખંડ; વિદ્યાર્થીઓ એકમેકને મદદરૂપ બની શકે તેવી પદ્ધતિ; ઉત્સાહ પ્રેરક ચર્ચાઓ સર્જી શકશે.</p>
</div>
<div class="english"><span style="font-size: x-large;">Introduction</span> <button class="right gu-btn button tiny radius">ગુજરાતી માં વાંચો</button><hr />
<p>Education is the foundation of any society and the manner, language in which it is conveyed governs its success. As we all move in the new era of &ldquo;e&rdquo;, where internet is the key enabler for majority of the day to day things, right from shopping, communicating, tickets, so on and so forth. This has initiated a change in the way of learning as well.</p>
<p>EVidyalay is one more sincere attempt to drive the change in the way of learning so that the learning becomes simple, more users friendly and interesting.</p>
<p>One of the main features of EV is its online video library. It comprises of videos on Mathematics, Vedic Mathematics, Early Learning Gujarati, etc. The video library is under continuous development taking into consideration feedbacks. EVidyalay&rsquo;s vision is to make education accessible to all children, which is repeatable as well independent of time and location. Children should be able to learn anytime, anywhere at their own pace. At the same time we can effectively use tools and techniques to make learning more interactive and helpful to teachers as well parents. Teachers can encourage project-based classroom, Peer tutoring, Lively discussion in the field of knowledge.</p>
</div>
<div class="row">
	<div class="columns large-5">
		<script src="https://apis.google.com/js/platform.js"></script>
		<script>
		  function onYtEvent(payload) {
		    if (payload.eventType == 'subscribe') {
		      // Add code to handle subscribe event.
		    } else if (payload.eventType == 'unsubscribe') {
		      // Add code to handle unsubscribe event.
		    }
		    if (window.console) { // for debugging only
		      window.console.log('YT event: ', payload);
		    }
		  }
		</script>
		<div class="g-ytsubscribe" data-channel="EVidyalay" data-layout="default" data-count="default" data-onytevent="onYtEvent"></div>
	</div>
	<div class="columns large-5">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=771314749638441";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-like" data-href="https://www.facebook.com/EVidyalay-1402367269999383/?fref=ts" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
	</div>
</div>
</div>
</div>
</div>
<br/>