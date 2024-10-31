<?php








/**



 * The form to be loaded on the plugin's admin page



 */



	if( current_user_can( 'edit_users' ) ) {		



		



		// Populate the dropdown list with exising users.



        $dropdown_html = '<select required id="prwirepro_user_select" name="prwirepro[user_select]">



                            <option value="">'.__( 'Select a WP User', $this->plugin_text_domain ).'</option>';



        $wp_users = get_users( array( 'fields' => array( 'user_login', 'display_name' ) ) );		



		



		foreach ( $wp_users as $user ) {



			$user_login = esc_html( $user->user_login );



			$user_display_name = esc_html( $user->display_name );



			



			$dropdown_html .= '<option value="' . $user_login . '">' . $user_login . ' (' . $user_display_name  . ') ' . '</option>' . "\n";



		}



        $dropdown_html .= '</select>';



		



		// Generate a custom nonce value.



		$prwirepro_add_meta_nonce = wp_create_nonce( 'prwirepro_add_user_meta_form_nonce' ); 



		



		// Build the Form



?>			


	



			

	

	  
<div style="padding: 70px;">
	<h3>Basic Press Release Template</h3>
	<img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/pressreleasetemplate.png'; ?>">
	  <br><br><br>
	  <b>FOR IMMEDIATE RELEASE</b>
<br><br><br>
<span style="font-weight: 400;">Media Contact:</span>
<br>
<b>Your Name</b>
<br>
<b>Your Phone Number</b>
<br>
<b>Your Email Address</b>
<br>
<b>Your Company Website URL</b>
<br>
&nbsp;
<br>

<h1>Your Main Press Release Title Here</h1>
<br><br>


<b>SAN FRANCISCO, DECEMBER 13, 2018</b><span style="font-weight: 400;"> -- Give your reader a reason to click your headline. Your headline should provide some benefit for the reader to want to click it and learn more. Find an angle that will make your story interesting for a journalist. Provide relevant information about a company’s unique products/services. Press releases will help you rank higher on search engines and be found in places like google, yahoo and bing. Press release distribution will also help you rank for more keywords relative to your website. Grab your reader's’ attention with an engaging first paragraph. Don’t waste any time and get directly to the point. Address each important point in this paragraph and address the who, what, where, why and how here as well.</span>

<br><br>
<span style="font-weight: 400;">The second paragraph should contain additional details giving context to your announcement, which can help reporters write their own story.</span>

&nbsp;
<br>
<span style="font-weight: 400;">This section can also break up your press release highlights into a list using bullet points, which allows the reader to skim the information and get to the important details quickly.</span>

&nbsp;
<br><br>
<b></b>
<ul>
 	<li><b>Highlight #1</b></li>
</ul>
<ul>
 	<li><b>Highlight #2</b></li>
</ul>
<ul>
 	<li><b>Highlight #3</b></li>
</ul>
&nbsp;
<br>
&nbsp;
<br>
<span style="font-weight: 400;">Professional, well-written copy is one of the easiest ways in which to build up your reputation and credibility with journalists and news outlets. Additional paragraphs should contain more background information, including hard numbers to support the significance of your product or announcement. Make sure to keep any additional paragraphs short (2-4 sentences) and feel free to use hyperlinks and media content such as photos, videos or audio clips. Press releases will help you rank higher on search engines and be found in places like google, yahoo and bing. Press release distribution will also help you rank for more keywords relative to your website as they usually contain inbound links and content that is relative to your website.</span>
<br>
&nbsp;
<br>
<span style="font-weight: 400;">Let your reader know what next steps you want them to take by including a call-to-action near the end of the press release. </span><b>If a call-to-action isn’t appropriate for your press release, then let your reader know where they can find more information. Make sure to optimize your press release via keywords, tags and targeted anchor text in the urls and links to make them easier to find and rank in search engines. Avoid press release distribution sites that use NoFollow links to link to your website. Alot of the press release sites use nofollow links, make sure they allow doFollow links to help improve your seo when you distribute your press release online to news outlets and journalists.</b>

&nbsp;
<br><br>
<span style="font-weight: 400;"><b>About Your Company</b></span>
<br>
<span style="font-weight: 400;">The very last paragraph of your press release is your boilerplate. This paragraph should provide a description of your business. What products or services do you provide? What is your company about? Give the reader information to help them understand the focus and purpose of your company.</span>
	</div>
	

		



		



	<?php    



	}



	else {  



	?>



		<p> <?php __("You are not authorized to perform this operation.", $this->plugin_name) ?> </p>



	<?php   



	}



