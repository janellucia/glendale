<?php

/*
	Template Name: Membership Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="membership">
		<div class="container clearfix">
			<div class="membership-wrap">
				<div class="title">
					<h2>Club Membership</h2>
					<p>select the best plan</p>
				</div>
				<div class="membership-types">
					<div class="membership-type">
						<div class="type">
							<h3>Family</h3>
						</div>
						<!-- <div class="amount">
							<h3>$65.00</h3>
						</div> -->
						<div class="description">
							<p>Max 2 Adults and student/juniors</p>
						</div>
						<div class="button">
							<a class="openmodal" id="link" href="http://glendaletennis.janellucia.com/family-membership/" role="button">Sign Up</a>
						</div>
					</div>
					<div class="membership-type">
						<div class="type">
							<h3> Single Adult</h3>
						</div>
						<!-- <div class="amount">
							<h3>$45.00</h3>
						</div> -->
						<div class="description">
							<p>For Adults 18 years & older</p>
						</div>
						<div class="button">
							<a class="openmodal" id="link" href="http://glendaletennis.janellucia.com/adult-member/" role="button">Sign Up</a>
						</div>
					</div>
					<div class="membership-type">
						<div class="type">
							<h3>Junior</h3>
						</div>
						<!-- <div class="amount">
							<h3>$15.00</h3>
						</div> -->
						<div class="description">
							<p> Juniors 17 years & under</p>
						</div>
						<div class="button">
							<a class="openmodal" id="link" href="http://glendaletennis.janellucia.com/junior-membership/" role="button">Sign Up</a>
						</div>
					</div>
					<div class="membership-type">
						<div class="type">
							<h3>Register by Mail</h3>
						</div>
						<!-- <div class="amount">
							<h3></h3>
						</div> -->
						<div class="description">
							<p>P.O. Box 444
								Pickering, ON
								L1V 2R6</p>
						</div>
						<div class="button">
							<a class="openmodal" id="link" href="http://glendaletennis.janellucia.com/wp-content/uploads/2017/03/Registration_Form2017.pdf" role="button">Download</a>
						</div>
					</div>
				</div><!-- end of membership types -->
			</div><!-- end of membership wrap -->
		</div><!-- end of wrapper -->
	</div><!-- end of membership section -->

	<div class="court-rules">
		<div class="container clearfix">
			<div class="rules-wrap">
				<h2>Court Rules</h2>
				<p>This is a community Members Only Club. To go on a court you must have proof of your membership available. The form is issued to you at time of registration and is to be kept with you while on the court in case you are challenged.</p>
				<p>Courts are available to all members from 8AM to 11PM seven days a week, unless scheduled (in the calendar) for tournament, league play or lessons. During busy times (i.e. when people are waiting) doubles play is encouraged.</p>
				<p>Playing time is divided up into 30-minute intervals with changeovers on the hour and half hour. If you are on the court and new players are arriving to play on your court, you must cease your play (if on the hour or 1/2 hour). This rule allows everyone to get a fair share of the clock time.</p>
				<p>Adults have priority (at the 1/2 hour court changeovers) on weekdays from 6PM until 11PM and on weekends and holidays from noon until 11PM except Sundays from 4PM to 6PM, which is junior time. Junior time is also from Monday to Friday from 4PM to 6PM. At all other times, juniors and adults have equal priority. Adults may not bump juniors off a court in the middle of a half hour interval.</p>
				<p>Members may not reserve time without being present and remaining at the courts. To reserve court time, members must hang their racquet on the correspondingly numbered peg located in the entranceway. You may not reserve for two periods at once. However, at the end of your playing period, and after you have come off, you may reserve any unreserved court, or move to an open court.</p>
				<p>If a vacancy allows you to go on court 14 minutes or less before the beginning of the next period, then you may reserve for the next period and gain the extra time. If you reserve a court with more than 14 minutes remaining, then if new players arrive, you must vacate the court at the end of the period and re-tag if a court is available.</p>
				<p>Proper court etiquette must be observed at all times or your playing rights will be suspended.</p>
				<p>Dress code: non-marking soft or rubber soles on shoes is a safety must. No topless privileges. Proper tennis apparel should be worn.</p>
				<p>Any non-members must be accompanied by a member to play on the courts. Any non-member playing on the courts plays at his/her own risk. Two members take precedence over a member and a guest.</p>
				<p>A member may invite the same guest up to 3 times per season without charge. After that, the guest will be invited to take out a membership or pay a guest fee of $10 per session.</p>
				<p>Use of more than six balls is limited to Court #1.</p>
				<p>For the safety of our courts and members, bicycles are not allowed inside the court gate. A bicycle stand is provided just outside the gate for members and guests. Please secure your equipment.</p>
				<p>Please recycle using the blue box program.</p>
				<p>Smoking is prohibited within the confines of the tennis club. Thank you for your cooperation.</p>
			</div><!-- /.rules-wrap -->
		</div><!-- /.container -->
	</div><!-- /.court rules -->

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>