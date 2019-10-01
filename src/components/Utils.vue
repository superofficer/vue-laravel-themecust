<template>
	<div class="p-grid">
		<div class="p-col-12">
			<div class="card">
				<div class="card-title">Card</div>
				<p>Card is a section to group content and layout provides a built-in css for it. Apply .card style class to your container to use it. If the
					card has a title defined with h1 tag, add card-w-title to adjust paddings.</p>
				<pre>
&lt;div class="card"&gt;
&emsp;&emsp;Content here
&lt;/div&gt;<br/>
&lt;div class="card card-w-title"&gt;
&emsp;&emsp;&lt;h1&gt;Card with Title&lt;h1&gt;
&emsp;&emsp;Content here
&lt;/div&gt;
</pre>

				<div class="card">
					Content
				</div>

				<div class="card card-w-title">
					<div class="card-title">Card with Title</div>
					Content
				</div>

				<div class="card-title">Input Animations</div>
				<p>Label of an input can be animated on focus by wrapping both the input and label in an element with md-inputfield style class.</p>
				<br />

				<span class="md-inputfield">
                <InputText v-model="example"/>
                <label>Name</label>
            </span>

<pre>
&lt;span class="md-inputfield"&gt;
&emsp;&emsp;&lt;InputText/&gt;
&emsp;&emsp;&lt;label>Name&lt;/label&gt;
&lt;/span>
</pre>

				<div class="card-title">Shadows</div>
				<p>5 levels of shadows are provided varying from ui-shadow-1 to ui-shadow-5 to define the level of depth.</p>

				<div class="p-grid">
					<div class="p-col-12 p-md-2">
						<div class="shadow-box"></div>
					</div>
					<div class="p-col-12 p-md-2">
						<div class="shadow-box ui-shadow-1"></div>
					</div>
					<div class="p-col-12 p-md-2">
						<div class="shadow-box ui-shadow-2"></div>
					</div>
					<div class="p-col-12 p-md-2">
						<div class="shadow-box ui-shadow-3"></div>
					</div>
					<div class="p-col-12 p-md-2">
						<div class="shadow-box ui-shadow-4"></div>
					</div>
					<div class="p-col-12 p-md-2">
						<div class="shadow-box ui-shadow-5"></div>
					</div>
				</div>
<pre>
&lt;div class="p-grid"&gt;
&emsp;&lt;div class="p-col-12 p-md-2"&gt;
&emsp;&emsp;&lt;div class="shadow-box"&gt;&lt;/div&gt;
&emsp;&lt;/div&gt;
&emsp;&lt;div class="p-col-12 p-md-2"&gt;
&emsp;&emsp;&lt;div class="shadow-box ui-shadow-1"&gt;&lt;/div&gt;
&emsp;&lt;/div&gt;
&emsp;&lt;div class="p-col-12 p-md-2"&gt;
&emsp;&emsp;&lt;div class="shadow-box ui-shadow-2"&gt;&lt;/div&gt;
&emsp;&lt;/div&gt;
&emsp;&lt;div class="p-col-12 p-md-2"&gt;
&emsp;&emsp;&lt;div class="shadow-box ui-shadow-3"&gt;&lt;/div&gt;
&emsp;&lt;/div&gt;
&emsp;&lt;div class="p-col-12 p-md-2"&gt;
&emsp;&emsp;&lt;div class="shadow-box ui-shadow-4"&gt;&lt;/div&gt;
&emsp;&lt;/div&gt;
&emsp;&lt;div class="p-col-12 p-md-2"&gt;
&emsp;&emsp;&lt;div class="shadow-box ui-shadow-5"&gt;&lt;/div&gt;
&emsp;&lt;/div&gt;
&lt;/div&gt;
</pre>

				<div class="card-title">Icons</div>
				<p><a href="https://design.google.com/icons/">All material icons</a> have been ported
					using <i>pi-md-</i> convention. To use an icon within a component
					such as button below, define it using the icon attribute prefixed by <i>pi-md-</i>.</p>

				<div style="text-align:center; margin-bottom:16px">
				<Button label="pi-md-check" icon="pi-md-check"></Button>
			</div>

			<pre>
&lt;Button label="pi-md-check" icon="pi-md-check"&gt;&lt;/Button&gt;
</pre>

			<div class="p-grid icon-grid">
				<div class="p-col-12 p-md-2"><i class="pi-md-3d-rotation"></i>3d-rotation</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-ac-unit"></i>ac-unit</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-access-alarm"></i>access-alarm</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-access-alarms"></i>access-alarms</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-access-time"></i>access-time</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-accessibility"></i>accessibility</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-accessible"></i>accessible</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-account-balance"></i>account-balance</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-account-balance-wallet"></i>account-balance-wallet</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-account-box"></i>account-box</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-account-circle"></i>account-circle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add"></i>add</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-a-photo"></i>add-a-photo</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-alarm"></i>add-alarm</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-alert"></i>add-alert</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-box"></i>add-box</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-circle"></i>add-circle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-circle-outline"></i>add-circle-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-location"></i>add-location</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-shopping-cart"></i>add-shopping-cart</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-to-photos"></i>add-to-photos</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-add-to-queue"></i>add-to-queue</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-adjust"></i>adjust</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airline-seat-flat"></i>airline-seat-flat</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airline-seat-flat-angled"></i>airline-seat-flat-angled</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airline-seat-individual-suite"></i>airline-seat-individual-suite</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airline-seat-legroom-extra"></i>airline-seat-legroom-extra</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airline-seat-legroom-normal"></i>airline-seat-legroom-normal</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airline-seat-legroom-reduced"></i>airline-seat-legroom-reduced</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airline-seat-recline-extra"></i>airline-seat-recline-extra</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airline-seat-recline-normal"></i>airline-seat-recline-normal</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airplanemode-active"></i>airplanemode-active</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airplanemode-inactive"></i>airplanemode-inactive</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airplay"></i>airplay</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-airport-shuttle"></i>airport-shuttle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-alarm"></i>alarm</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-alarm-add"></i>alarm-add</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-alarm-off"></i>alarm-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-alarm-on"></i>alarm-on</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-album"></i>album</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-all-inclusive"></i>all-inclusive</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-all-out"></i>all-out</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-android"></i>android</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-announcement"></i>announcement</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-apps"></i>apps</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-archive"></i>archive</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-arrow-back"></i>arrow-back</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-arrow-downward"></i>arrow-downward</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-arrow-drop-down"></i>arrow-drop-down</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-arrow-drop-down-circle"></i>arrow-drop-down-circle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-arrow-drop-up"></i>arrow-drop-up</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-arrow-forward"></i>arrow-forward</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-arrow-upward"></i>arrow-upward</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-art-track"></i>art-track</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-aspect-ratio"></i>aspect-ratio</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-assessment"></i>assessment</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-assignment"></i>assignment</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-assignment-ind"></i>assignment-ind</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-assignment-late"></i>assignment-late</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-assignment-return"></i>assignment-return</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-assignment-returned"></i>assignment-returned</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-assignment-turned-in"></i>assignment-turned-in</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-assistant"></i>assistant</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-assistant-photo"></i>assistant-photo</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-attach-file"></i>attach-file</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-attach-money"></i>attach-money</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-attachment"></i>attachment</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-audiotrack"></i>audiotrack</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-autorenew"></i>autorenew</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-av-timer"></i>av-timer</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-backspace"></i>backspace</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-backup"></i>backup</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-battery-alert"></i>battery-alert</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-battery-charging-full"></i>battery-charging-full</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-battery-full"></i>battery-full</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-battery-std"></i>battery-std</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-battery-unknown"></i>battery-unknown</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-beach-access"></i>beach-access</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-beenhere"></i>beenhere</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-block"></i>block</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-bluetooth"></i>bluetooth</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-bluetooth-audio"></i>bluetooth-audio</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-bluetooth-connected"></i>bluetooth-connected</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-bluetooth-disabled"></i>bluetooth-disabled</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-bluetooth-searching"></i>bluetooth-searching</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-blur-circular"></i>blur-circular</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-blur-linear"></i>blur-linear</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-blur-off"></i>blur-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-blur-on"></i>blur-on</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-book"></i>book</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-bookmark"></i>bookmark</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-bookmark-border"></i>bookmark-border</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-all"></i>border-all</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-bottom"></i>border-bottom</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-clear"></i>border-clear</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-color"></i>border-color</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-horizontal"></i>border-horizontal</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-inner"></i>border-inner</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-left"></i>border-left</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-outer"></i>border-outer</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-right"></i>border-right</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-style"></i>border-style</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-top"></i>border-top</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-border-vertical"></i>border-vertical</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-branding-watermark"></i>branding-watermark</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-1"></i>brightness-1</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-2"></i>brightness-2</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-3"></i>brightness-3</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-4"></i>brightness-4</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-5"></i>brightness-5</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-6"></i>brightness-6</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-7"></i>brightness-7</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-auto"></i>brightness-auto</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-high"></i>brightness-high</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-low"></i>brightness-low</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brightness-medium"></i>brightness-medium</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-broken-image"></i>broken-image</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-brush"></i>brush</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-bubble-chart"></i>bubble-chart</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-bug-report"></i>bug-report</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-build"></i>build</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-burst-mode"></i>burst-mode</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-business"></i>business</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-business-center"></i>business-center</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cached"></i>cached</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cake"></i>cake</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-call"></i>call</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-call-end"></i>call-end</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-call-made"></i>call-made</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-call-merge"></i>call-merge</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-call-missed"></i>call-missed</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-call-missed-outgoing"></i>call-missed-outgoing</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-call-received"></i>call-received</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-call-split"></i>call-split</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-call-to-action"></i>call-to-action</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-camera"></i>camera</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-camera-alt"></i>camera-alt</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-camera-enhance"></i>camera-enhance</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-camera-front"></i>camera-front</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-camera-rear"></i>camera-rear</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-camera-roll"></i>camera-roll</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cancel"></i>cancel</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-card-giftcard"></i>card-giftcard</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-card-membership"></i>card-membership</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-card-travel"></i>card-travel</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-casino"></i>casino</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cast"></i>cast</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cast-connected"></i>cast-connected</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-center-focus-strong"></i>center-focus-strong</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-center-focus-weak"></i>center-focus-weak</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-change-history"></i>change-history</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-chat"></i>chat</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-chat-bubble"></i>chat-bubble</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-chat-bubble-outline"></i>chat-bubble-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-check"></i>check</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-check-box"></i>check-box</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-check-box-outline-blank"></i>check-box-outline-blank</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-check-circle"></i>check-circle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-chevron-left"></i>chevron-left</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-chevron-right"></i>chevron-right</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-child-care"></i>child-care</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-child-friendly"></i>child-friendly</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-chrome-reader-mode"></i>chrome-reader-mode</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-class"></i>class</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-clear"></i>clear</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-clear-all"></i>clear-all</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-close"></i>close</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-closed-caption"></i>closed-caption</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cloud"></i>cloud</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cloud-circle"></i>cloud-circle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cloud-done"></i>cloud-done</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cloud-download"></i>cloud-download</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cloud-off"></i>cloud-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cloud-queue"></i>cloud-queue</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-cloud-upload"></i>cloud-upload</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-code"></i>code</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-collections"></i>collections</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-collections-bookmark"></i>collections-bookmark</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-color-lens"></i>color-lens</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-colorize"></i>colorize</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-comment"></i>comment</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-compare"></i>compare</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-compare-arrows"></i>compare-arrows</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-computer"></i>computer</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-confirmation-number"></i>confirmation-number</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-contact-mail"></i>contact-mail</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-contact-phone"></i>contact-phone</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-contacts"></i>contacts</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-content-copy"></i>content-copy</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-content-cut"></i>content-cut</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-content-paste"></i>content-paste</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-control-point"></i>control-point</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-control-point-duplicate"></i>control-point-duplicate</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-copyright"></i>copyright</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-create"></i>create</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-create-new-folder"></i>create-new-folder</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-credit-card"></i>credit-card</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop"></i>crop</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-16-9"></i>crop-16-9</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-3-2"></i>crop-3-2</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-5-4"></i>crop-5-4</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-7-5"></i>crop-7-5</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-din"></i>crop-din</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-free"></i>crop-free</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-landscape"></i>crop-landscape</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-original"></i>crop-original</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-portrait"></i>crop-portrait</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-rotate"></i>crop-rotate</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-crop-square"></i>crop-square</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-dashboard"></i>dashboard</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-data-usage"></i>data-usage</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-date-range"></i>date-range</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-dehaze"></i>dehaze</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-delete"></i>delete</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-delete-forever"></i>delete-forever</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-delete-sweep"></i>delete-sweep</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-description"></i>description</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-desktop-mac"></i>desktop-mac</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-desktop-windows"></i>desktop-windows</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-details"></i>details</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-developer-board"></i>developer-board</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-developer-mode"></i>developer-mode</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-device-hub"></i>device-hub</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-devices"></i>devices</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-devices-other"></i>devices-other</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-dialer-sip"></i>dialer-sip</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-dialpad"></i>dialpad</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions"></i>directions</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions-bike"></i>directions-bike</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions-boat"></i>directions-boat</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions-bus"></i>directions-bus</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions-car"></i>directions-car</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions-railway"></i>directions-railway</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions-run"></i>directions-run</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions-subway"></i>directions-subway</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions-transit"></i>directions-transit</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-directions-walk"></i>directions-walk</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-disc-full"></i>disc-full</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-dns"></i>dns</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-do-not-disturb"></i>do-not-disturb</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-do-not-disturb-alt"></i>do-not-disturb-alt</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-do-not-disturb-off"></i>do-not-disturb-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-do-not-disturb-on"></i>do-not-disturb-on</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-dock"></i>dock</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-domain"></i>domain</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-done"></i>done</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-done-all"></i>done-all</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-donut-large"></i>donut-large</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-donut-small"></i>donut-small</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-drafts"></i>drafts</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-drag-handle"></i>drag-handle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-drive-eta"></i>drive-eta</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-dvr"></i>dvr</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-edit"></i>edit</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-edit-location"></i>edit-location</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-eject"></i>eject</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-email"></i>email</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-enhanced-encryption"></i>enhanced-encryption</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-equalizer"></i>equalizer</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-error"></i>error</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-error-outline"></i>error-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-euro-symbol"></i>euro-symbol</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-ev-station"></i>ev-station</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-event"></i>event</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-event-available"></i>event-available</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-event-busy"></i>event-busy</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-event-note"></i>event-note</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-event-seat"></i>event-seat</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-exit-to-app"></i>exit-to-app</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-expand-less"></i>expand-less</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-expand-more"></i>expand-more</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-explicit"></i>explicit</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-explore"></i>explore</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-exposure"></i>exposure</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-exposure-neg-1"></i>exposure-neg-1</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-exposure-neg-2"></i>exposure-neg-2</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-exposure-plus-1"></i>exposure-plus-1</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-exposure-plus-2"></i>exposure-plus-2</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-exposure-zero"></i>exposure-zero</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-extension"></i>extension</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-face"></i>face</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fast-forward"></i>fast-forward</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fast-rewind"></i>fast-rewind</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-favorite"></i>favorite</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-favorite-border"></i>favorite-border</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-featured-play-list"></i>featured-play-list</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-featured-video"></i>featured-video</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-feedback"></i>feedback</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fiber-dvr"></i>fiber-dvr</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fiber-manual-record"></i>fiber-manual-record</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fiber-new"></i>fiber-new</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fiber-pin"></i>fiber-pin</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fiber-smart-record"></i>fiber-smart-record</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-file-download"></i>file-download</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-file-upload"></i>file-upload</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter"></i>filter</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-1"></i>filter-1</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-2"></i>filter-2</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-3"></i>filter-3</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-4"></i>filter-4</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-5"></i>filter-5</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-6"></i>filter-6</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-7"></i>filter-7</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-8"></i>filter-8</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-9"></i>filter-9</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-9-plus"></i>filter-9-plus</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-b-and-w"></i>filter-b-and-w</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-center-focus"></i>filter-center-focus</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-drama"></i>filter-drama</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-frames"></i>filter-frames</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-hdr"></i>filter-hdr</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-list"></i>filter-list</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-none"></i>filter-none</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-tilt-shift"></i>filter-tilt-shift</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-filter-vintage"></i>filter-vintage</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-find-in-page"></i>find-in-page</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-find-replace"></i>find-replace</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fingerprint"></i>fingerprint</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-first-page"></i>first-page</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fitness-center"></i>fitness-center</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flag"></i>flag</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flare"></i>flare</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flash-auto"></i>flash-auto</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flash-off"></i>flash-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flash-on"></i>flash-on</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flight"></i>flight</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flight-land"></i>flight-land</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flight-takeoff"></i>flight-takeoff</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flip"></i>flip</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flip-to-back"></i>flip-to-back</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-flip-to-front"></i>flip-to-front</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-folder"></i>folder</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-folder-open"></i>folder-open</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-folder-shared"></i>folder-shared</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-folder-special"></i>folder-special</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-font-download"></i>font-download</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-align-center"></i>format-align-center</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-align-justify"></i>format-align-justify</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-align-left"></i>format-align-left</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-align-right"></i>format-align-right</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-bold"></i>format-bold</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-clear"></i>format-clear</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-color-fill"></i>format-color-fill</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-color-reset"></i>format-color-reset</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-color-text"></i>format-color-text</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-indent-decrease"></i>format-indent-decrease</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-indent-increase"></i>format-indent-increase</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-italic"></i>format-italic</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-line-spacing"></i>format-line-spacing</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-list-bulleted"></i>format-list-bulleted</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-list-numbered"></i>format-list-numbered</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-paint"></i>format-paint</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-quote"></i>format-quote</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-shapes"></i>format-shapes</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-size"></i>format-size</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-strikethrough"></i>format-strikethrough</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-textdirection-l-to-r"></i>format-textdirection-l-to-r</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-textdirection-r-to-l"></i>format-textdirection-r-to-l</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-format-underlined"></i>format-underlined</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-forum"></i>forum</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-forward"></i>forward</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-forward-10"></i>forward-10</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-forward-30"></i>forward-30</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-forward-5"></i>forward-5</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-free-breakfast"></i>free-breakfast</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fullscreen"></i>fullscreen</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-fullscreen-exit"></i>fullscreen-exit</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-functions"></i>functions</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-g-translate"></i>g-translate</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-gamepad"></i>gamepad</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-games"></i>games</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-gavel"></i>gavel</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-gesture"></i>gesture</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-get-app"></i>get-app</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-gif"></i>gif</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-golf-course"></i>golf-course</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-gps-fixed"></i>gps-fixed</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-gps-not-fixed"></i>gps-not-fixed</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-gps-off"></i>gps-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-grade"></i>grade</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-gradient"></i>gradient</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-grain"></i>grain</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-graphic-eq"></i>graphic-eq</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-grid-off"></i>grid-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-grid-on"></i>grid-on</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-group"></i>group</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-group-add"></i>group-add</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-group-work"></i>group-work</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hd"></i>hd</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hdr-off"></i>hdr-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hdr-on"></i>hdr-on</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hdr-strong"></i>hdr-strong</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hdr-weak"></i>hdr-weak</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-headset"></i>headset</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-headset-mic"></i>headset-mic</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-healing"></i>healing</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hearing"></i>hearing</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-help"></i>help</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-help-outline"></i>help-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-high-quality"></i>high-quality</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-highlight"></i>highlight</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-highlight-off"></i>highlight-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-history"></i>history</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-home"></i>home</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hot-tub"></i>hot-tub</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hotel"></i>hotel</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hourglass-empty"></i>hourglass-empty</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-hourglass-full"></i>hourglass-full</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-http"></i>http</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-https"></i>https</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-image"></i>image</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-image-aspect-ratio"></i>image-aspect-ratio</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-import-contacts"></i>import-contacts</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-import-export"></i>import-export</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-important-devices"></i>important-devices</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-inbox"></i>inbox</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-indeterminate-check-box"></i>indeterminate-check-box</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-info"></i>info</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-info-outline"></i>info-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-input"></i>input</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-insert-chart"></i>insert-chart</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-insert-comment"></i>insert-comment</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-insert-drive-file"></i>insert-drive-file</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-insert-emoticon"></i>insert-emoticon</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-insert-invitation"></i>insert-invitation</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-insert-link"></i>insert-link</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-insert-photo"></i>insert-photo</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-invert-colors"></i>invert-colors</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-invert-colors-off"></i>invert-colors-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-iso"></i>iso</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard"></i>keyboard</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-arrow-down"></i>keyboard-arrow-down</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-arrow-left"></i>keyboard-arrow-left</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-arrow-right"></i>keyboard-arrow-right</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-arrow-up"></i>keyboard-arrow-up</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-backspace"></i>keyboard-backspace</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-capslock"></i>keyboard-capslock</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-hide"></i>keyboard-hide</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-return"></i>keyboard-return</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-tab"></i>keyboard-tab</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-keyboard-voice"></i>keyboard-voice</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-kitchen"></i>kitchen</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-label"></i>label</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-label-outline"></i>label-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-landscape"></i>landscape</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-language"></i>language</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-laptop"></i>laptop</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-laptop-chromebook"></i>laptop-chromebook</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-laptop-mac"></i>laptop-mac</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-laptop-windows"></i>laptop-windows</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-last-page"></i>last-page</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-launch"></i>launch</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-layers"></i>layers</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-layers-clear"></i>layers-clear</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-leak-add"></i>leak-add</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-leak-remove"></i>leak-remove</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-lens"></i>lens</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-library-add"></i>library-add</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-library-books"></i>library-books</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-library-music"></i>library-music</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-lightbulb-outline"></i>lightbulb-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-line-style"></i>line-style</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-line-weight"></i>line-weight</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-linear-scale"></i>linear-scale</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-link"></i>link</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-linked-camera"></i>linked-camera</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-list"></i>list</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-live-help"></i>live-help</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-live-tv"></i>live-tv</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-activity"></i>local-activity</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-airport"></i>local-airport</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-atm"></i>local-atm</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-bar"></i>local-bar</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-cafe"></i>local-cafe</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-car-wash"></i>local-car-wash</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-convenience-store"></i>local-convenience-store</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-dining"></i>local-dining</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-drink"></i>local-drink</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-florist"></i>local-florist</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-gas-station"></i>local-gas-station</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-grocery-store"></i>local-grocery-store</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-hospital"></i>local-hospital</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-hotel"></i>local-hotel</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-laundry-service"></i>local-laundry-service</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-library"></i>local-library</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-mall"></i>local-mall</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-movies"></i>local-movies</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-offer"></i>local-offer</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-parking"></i>local-parking</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-pharmacy"></i>local-pharmacy</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-phone"></i>local-phone</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-pizza"></i>local-pizza</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-play"></i>local-play</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-post-office"></i>local-post-office</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-printshop"></i>local-printshop</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-see"></i>local-see</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-shipping"></i>local-shipping</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-local-taxi"></i>local-taxi</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-location-city"></i>location-city</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-location-disabled"></i>location-disabled</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-location-off"></i>location-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-location-on"></i>location-on</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-location-searching"></i>location-searching</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-lock"></i>lock</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-lock-open"></i>lock-open</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-lock-outline"></i>lock-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-looks"></i>looks</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-looks-3"></i>looks-3</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-looks-4"></i>looks-4</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-looks-5"></i>looks-5</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-looks-6"></i>looks-6</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-looks-one"></i>looks-one</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-looks-two"></i>looks-two</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-loop"></i>loop</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-loupe"></i>loupe</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-low-priority"></i>low-priority</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-loyalty"></i>loyalty</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mail"></i>mail</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mail-outline"></i>mail-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-map"></i>map</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-markunread"></i>markunread</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-markunread-mailbox"></i>markunread-mailbox</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-memory"></i>memory</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-menu"></i>menu</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-merge-type"></i>merge-type</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-message"></i>message</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mic"></i>mic</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mic-none"></i>mic-none</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mic-off"></i>mic-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mms"></i>mms</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mode-comment"></i>mode-comment</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mode-edit"></i>mode-edit</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-monetization-on"></i>monetization-on</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-money-off"></i>money-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-monochrome-photos"></i>monochrome-photos</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mood"></i>mood</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mood-bad"></i>mood-bad</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-more"></i>more</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-more-horiz"></i>more-horiz</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-more-vert"></i>more-vert</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-motorcycle"></i>motorcycle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-mouse"></i>mouse</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-move-to-inbox"></i>move-to-inbox</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-movie"></i>movie</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-movie-creation"></i>movie-creation</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-movie-filter"></i>movie-filter</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-multiline-chart"></i>multiline-chart</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-music-note"></i>music-note</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-music-video"></i>music-video</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-my-location"></i>my-location</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-nature"></i>nature</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-nature-people"></i>nature-people</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-navigate-before"></i>navigate-before</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-navigate-next"></i>navigate-next</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-navigation"></i>navigation</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-near-me"></i>near-me</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-network-cell"></i>network-cell</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-network-check"></i>network-check</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-network-locked"></i>network-locked</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-network-wifi"></i>network-wifi</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-new-releases"></i>new-releases</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-next-week"></i>next-week</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-nfc"></i>nfc</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-no-encryption"></i>no-encryption</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-no-sim"></i>no-sim</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-not-interested"></i>not-interested</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-note"></i>note</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-note-add"></i>note-add</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-notifications"></i>notifications</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-notifications-active"></i>notifications-active</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-notifications-none"></i>notifications-none</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-notifications-off"></i>notifications-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-notifications-paused"></i>notifications-paused</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-offline-pin"></i>offline-pin</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-ondemand-video"></i>ondemand-video</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-opacity"></i>opacity</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-open-in-browser"></i>open-in-browser</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-open-in-new"></i>open-in-new</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-open-with"></i>open-with</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pages"></i>pages</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pageview"></i>pageview</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-palette"></i>palette</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pan-tool"></i>pan-tool</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-panorama"></i>panorama</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-panorama-fish-eye"></i>panorama-fish-eye</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-panorama-horizontal"></i>panorama-horizontal</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-panorama-vertical"></i>panorama-vertical</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-panorama-wide-angle"></i>panorama-wide-angle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-party-mode"></i>party-mode</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pause"></i>pause</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pause-circle-filled"></i>pause-circle-filled</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pause-circle-outline"></i>pause-circle-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-payment"></i>payment</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-people"></i>people</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-people-outline"></i>people-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-perm-camera-mic"></i>perm-camera-mic</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-perm-contact-calendar"></i>perm-contact-calendar</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-perm-data-setting"></i>perm-data-setting</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-perm-device-information"></i>perm-device-information</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-perm-identity"></i>perm-identity</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-perm-media"></i>perm-media</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-perm-phone-msg"></i>perm-phone-msg</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-perm-scan-wifi"></i>perm-scan-wifi</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-person"></i>person</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-person-add"></i>person-add</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-person-outline"></i>person-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-person-pin"></i>person-pin</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-person-pin-circle"></i>person-pin-circle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-personal-video"></i>personal-video</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pets"></i>pets</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phone"></i>phone</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phone-android"></i>phone-android</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phone-bluetooth-speaker"></i>phone-bluetooth-speaker</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phone-forwarded"></i>phone-forwarded</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phone-in-talk"></i>phone-in-talk</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phone-iphone"></i>phone-iphone</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phone-locked"></i>phone-locked</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phone-missed"></i>phone-missed</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phone-paused"></i>phone-paused</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phonelink"></i>phonelink</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phonelink-erase"></i>phonelink-erase</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phonelink-lock"></i>phonelink-lock</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phonelink-off"></i>phonelink-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phonelink-ring"></i>phonelink-ring</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-phonelink-setup"></i>phonelink-setup</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-photo"></i>photo</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-photo-album"></i>photo-album</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-photo-camera"></i>photo-camera</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-photo-filter"></i>photo-filter</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-photo-library"></i>photo-library</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-photo-size-select-actual"></i>photo-size-select-actual</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-photo-size-select-large"></i>photo-size-select-large</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-photo-size-select-small"></i>photo-size-select-small</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-picture-as-pdf"></i>picture-as-pdf</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-picture-in-picture"></i>picture-in-picture</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-picture-in-picture-alt"></i>picture-in-picture-alt</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pie-chart"></i>pie-chart</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pie-chart-outlined"></i>pie-chart-outlined</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pin-drop"></i>pin-drop</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-place"></i>place</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-play-arrow"></i>play-arrow</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-play-circle-filled"></i>play-circle-filled</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-play-circle-outline"></i>play-circle-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-play-for-work"></i>play-for-work</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-playlist-add"></i>playlist-add</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-playlist-add-check"></i>playlist-add-check</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-playlist-play"></i>playlist-play</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-plus-one"></i>plus-one</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-poll"></i>poll</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-polymer"></i>polymer</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pool"></i>pool</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-portable-wifi-off"></i>portable-wifi-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-portrait"></i>portrait</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-power"></i>power</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-power-input"></i>power-input</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-power-settings-new"></i>power-settings-new</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-pregnant-woman"></i>pregnant-woman</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-present-to-all"></i>present-to-all</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-print"></i>print</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-priority-high"></i>priority-high</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-public"></i>public</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-publish"></i>publish</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-query-builder"></i>query-builder</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-question-answer"></i>question-answer</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-queue"></i>queue</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-queue-music"></i>queue-music</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-queue-play-next"></i>queue-play-next</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-radio"></i>radio</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-radio-button-checked"></i>radio-button-checked</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-radio-button-unchecked"></i>radio-button-unchecked</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-rate-review"></i>rate-review</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-receipt"></i>receipt</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-recent-actors"></i>recent-actors</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-record-voice-over"></i>record-voice-over</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-redeem"></i>redeem</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-redo"></i>redo</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-refresh"></i>refresh</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-remove"></i>remove</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-remove-circle"></i>remove-circle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-remove-circle-outline"></i>remove-circle-outline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-remove-from-queue"></i>remove-from-queue</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-remove-red-eye"></i>remove-red-eye</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-remove-shopping-cart"></i>remove-shopping-cart</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-reorder"></i>reorder</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-repeat"></i>repeat</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-repeat-one"></i>repeat-one</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-replay"></i>replay</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-replay-10"></i>replay-10</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-replay-30"></i>replay-30</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-replay-5"></i>replay-5</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-reply"></i>reply</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-reply-all"></i>reply-all</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-report"></i>report</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-report-problem"></i>report-problem</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-restaurant"></i>restaurant</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-restaurant-menu"></i>restaurant-menu</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-restore"></i>restore</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-restore-page"></i>restore-page</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-ring-volume"></i>ring-volume</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-room"></i>room</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-room-service"></i>room-service</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-rotate-90-degrees-ccw"></i>rotate-90-degrees-ccw</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-rotate-left"></i>rotate-left</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-rotate-right"></i>rotate-right</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-rounded-corner"></i>rounded-corner</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-router"></i>router</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-rowing"></i>rowing</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-rss-feed"></i>rss-feed</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-rv-hookup"></i>rv-hookup</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-satellite"></i>satellite</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-save"></i>save</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-scanner"></i>scanner</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-schedule"></i>schedule</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-school"></i>school</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-screen-lock-landscape"></i>screen-lock-landscape</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-screen-lock-portrait"></i>screen-lock-portrait</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-screen-lock-rotation"></i>screen-lock-rotation</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-screen-rotation"></i>screen-rotation</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-screen-share"></i>screen-share</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sd-card"></i>sd-card</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sd-storage"></i>sd-storage</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-search"></i>search</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-security"></i>security</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-select-all"></i>select-all</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-send"></i>send</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sentiment-dissatisfied"></i>sentiment-dissatisfied</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sentiment-neutral"></i>sentiment-neutral</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sentiment-satisfied"></i>sentiment-satisfied</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sentiment-very-dissatisfied"></i>sentiment-very-dissatisfied</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sentiment-very-satisfied"></i>sentiment-very-satisfied</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings"></i>settings</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-applications"></i>settings-applications</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-backup-restore"></i>settings-backup-restore</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-bluetooth"></i>settings-bluetooth</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-brightness"></i>settings-brightness</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-cell"></i>settings-cell</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-ethernet"></i>settings-ethernet</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-input-antenna"></i>settings-input-antenna</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-input-component"></i>settings-input-component</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-input-composite"></i>settings-input-composite</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-input-hdmi"></i>settings-input-hdmi</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-input-svideo"></i>settings-input-svideo</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-overscan"></i>settings-overscan</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-phone"></i>settings-phone</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-power"></i>settings-power</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-remote"></i>settings-remote</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-system-daydream"></i>settings-system-daydream</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-settings-voice"></i>settings-voice</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-share"></i>share</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-shop"></i>shop</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-shop-two"></i>shop-two</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-shopping-basket"></i>shopping-basket</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-shopping-cart"></i>shopping-cart</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-short-text"></i>short-text</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-show-chart"></i>show-chart</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-shuffle"></i>shuffle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-signal-cellular-4-bar"></i>signal-cellular-4-bar</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-signal-cellular-connected-no-internet-4-bar"></i>signal-cellular-connected-no-internet-4-bar</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-signal-cellular-no-sim"></i>signal-cellular-no-sim</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-signal-cellular-null"></i>signal-cellular-null</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-signal-cellular-off"></i>signal-cellular-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-signal-wifi-4-bar"></i>signal-wifi-4-bar</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-signal-wifi-4-bar-lock"></i>signal-wifi-4-bar-lock</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-signal-wifi-off"></i>signal-wifi-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sim-card"></i>sim-card</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sim-card-alert"></i>sim-card-alert</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-skip-next"></i>skip-next</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-skip-previous"></i>skip-previous</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-slideshow"></i>slideshow</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-slow-motion-video"></i>slow-motion-video</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-smartphone"></i>smartphone</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-smoke-free"></i>smoke-free</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-smoking-rooms"></i>smoking-rooms</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sms"></i>sms</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sms-failed"></i>sms-failed</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-snooze"></i>snooze</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sort"></i>sort</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sort-by-alpha"></i>sort-by-alpha</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-spa"></i>spa</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-space-bar"></i>space-bar</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-speaker"></i>speaker</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-speaker-group"></i>speaker-group</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-speaker-notes"></i>speaker-notes</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-speaker-notes-off"></i>speaker-notes-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-speaker-phone"></i>speaker-phone</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-spellcheck"></i>spellcheck</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-star"></i>star</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-star-border"></i>star-border</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-star-half"></i>star-half</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-stars"></i>stars</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-stay-current-landscape"></i>stay-current-landscape</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-stay-current-portrait"></i>stay-current-portrait</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-stay-primary-landscape"></i>stay-primary-landscape</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-stay-primary-portrait"></i>stay-primary-portrait</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-stop"></i>stop</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-stop-screen-share"></i>stop-screen-share</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-storage"></i>storage</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-store"></i>store</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-store-mall-directory"></i>store-mall-directory</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-straighten"></i>straighten</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-streetview"></i>streetview</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-strikethrough-s"></i>strikethrough-s</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-style"></i>style</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-subdirectory-arrow-left"></i>subdirectory-arrow-left</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-subdirectory-arrow-right"></i>subdirectory-arrow-right</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-subject"></i>subject</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-subscriptions"></i>subscriptions</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-subtitles"></i>subtitles</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-subway"></i>subway</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-supervisor-account"></i>supervisor-account</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-surround-sound"></i>surround-sound</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-swap-calls"></i>swap-calls</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-swap-horiz"></i>swap-horiz</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-swap-vert"></i>swap-vert</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-swap-vertical-circle"></i>swap-vertical-circle</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-switch-camera"></i>switch-camera</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-switch-video"></i>switch-video</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sync"></i>sync</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sync-disabled"></i>sync-disabled</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-sync-problem"></i>sync-problem</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-system-update"></i>system-update</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-system-update-alt"></i>system-update-alt</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tab"></i>tab</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tab-unselected"></i>tab-unselected</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tablet"></i>tablet</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tablet-android"></i>tablet-android</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tablet-mac"></i>tablet-mac</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tag-faces"></i>tag-faces</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tap-and-play"></i>tap-and-play</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-terrain"></i>terrain</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-text-fields"></i>text-fields</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-text-format"></i>text-format</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-textsms"></i>textsms</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-texture"></i>texture</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-theaters"></i>theaters</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-thumb-down"></i>thumb-down</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-thumb-up"></i>thumb-up</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-thumbs-up-down"></i>thumbs-up-down</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-time-to-leave"></i>time-to-leave</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-timelapse"></i>timelapse</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-timeline"></i>timeline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-timer"></i>timer</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-timer-10"></i>timer-10</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-timer-3"></i>timer-3</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-timer-off"></i>timer-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-title"></i>title</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-toc"></i>toc</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-today"></i>today</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-toll"></i>toll</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tonality"></i>tonality</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-touch-app"></i>touch-app</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-toys"></i>toys</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-track-changes"></i>track-changes</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-traffic"></i>traffic</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-train"></i>train</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tram"></i>tram</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-transfer-within-a-station"></i>transfer-within-a-station</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-transform"></i>transform</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-translate"></i>translate</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-trending-down"></i>trending-down</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-trending-flat"></i>trending-flat</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-trending-up"></i>trending-up</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tune"></i>tune</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-turned-in"></i>turned-in</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-turned-in-not"></i>turned-in-not</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-tv"></i>tv</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-unarchive"></i>unarchive</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-undo"></i>undo</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-unfold-less"></i>unfold-less</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-unfold-more"></i>unfold-more</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-update"></i>update</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-usb"></i>usb</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-verified-user"></i>verified-user</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-vertical-align-bottom"></i>vertical-align-bottom</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-vertical-align-center"></i>vertical-align-center</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-vertical-align-top"></i>vertical-align-top</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-vibration"></i>vibration</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-video-call"></i>video-call</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-video-label"></i>video-label</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-video-library"></i>video-library</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-videocam"></i>videocam</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-videocam-off"></i>videocam-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-videogame-asset"></i>videogame-asset</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-agenda"></i>view-agenda</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-array"></i>view-array</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-carousel"></i>view-carousel</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-column"></i>view-column</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-comfy"></i>view-comfy</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-compact"></i>view-compact</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-day"></i>view-day</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-headline"></i>view-headline</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-list"></i>view-list</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-module"></i>view-module</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-quilt"></i>view-quilt</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-stream"></i>view-stream</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-view-week"></i>view-week</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-vignette"></i>vignette</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-visibility"></i>visibility</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-visibility-off"></i>visibility-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-voice-chat"></i>voice-chat</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-voicemail"></i>voicemail</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-volume-down"></i>volume-down</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-volume-mute"></i>volume-mute</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-volume-off"></i>volume-off</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-volume-up"></i>volume-up</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-vpn-key"></i>vpn-key</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-vpn-lock"></i>vpn-lock</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wallpaper"></i>wallpaper</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-warning"></i>warning</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-watch"></i>watch</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-watch-later"></i>watch-later</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wb-auto"></i>wb-auto</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wb-cloudy"></i>wb-cloudy</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wb-incandescent"></i>wb-incandescent</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wb-iridescent"></i>wb-iridescent</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wb-sunny"></i>wb-sunny</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wc"></i>wc</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-web"></i>web</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-web-asset"></i>web-asset</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-weekend"></i>weekend</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-whatshot"></i>whatshot</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-widgets"></i>widgets</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wifi"></i>wifi</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wifi-lock"></i>wifi-lock</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wifi-tethering"></i>wifi-tethering</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-work"></i>work</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-wrap-text"></i>wrap-text</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-youtube-searched-for"></i>youtube-searched-for</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-zoom-in"></i>zoom-in</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-zoom-out"></i>zoom-out</div>
				<div class="p-col-12 p-md-2"><i class="pi-md-zoom-out-map"></i>zoom-out-map</div>
			</div>
		</div>
	</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				example: ''
			}
		}
	}
</script>

<style scoped>
.icon-grid div.p-col-12 {
	color: #757575;
	text-align: center;
	padding: 16px;
	font-size: 12px;
}

.icon-grid i {
	display: block;
	margin: 0 auto;
	font-size: 24px;
}

pre {
	font-family: monospace;
	background-color: #0C2238;
	color: #dddddd;
	padding: 1em;
	font-size: 14px;
	border-radius: 3px;
	overflow: auto;
}

.shadow-box {
	background-color: #607D8B;
	width: 100px;
	height: 100px;
}
</style>