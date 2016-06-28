<br/>
<div class="content-card large-10 small-12 large-offset-1 small-offset-0" id="home-content">
<div class="row">
<h3 class="head-navu">વિશિષ્ટ તત્વો</h3>
</div>
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
</div>
<br/>
<div class="content-card large-10 small-12 large-offset-1 small-offset-0">
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
</div>
<br/>
