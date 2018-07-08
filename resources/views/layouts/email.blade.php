@extends('layouts.default')
@section('content')

<div id="c-forms-container" class="cognito c-safari c-lrg">
	{!! Form::open(array('id' => 'form', 'route' => 'sendemail', 'method' => 'post')); !!}
		<div class="c-forms-form" tabindex="0">
			<div class="c-forms-confirmation" style="display: block;">
				<div class="c-forms-heading">
					<div class="c-forms-form-title">
						<h2>HMF Property</h2>
					</div>
				</div>
				<div class="c-forms-confirmation-message c-html"><span>Thank you for filling out the form. Your response has been recorded.</span></div>
				<div class="c-forms-confirmation-message c-html"><span>Your Volume/Folio No. is {!! $volume_no !!}/{!! $folio_no !!}.</span></div>
			</div>
			
			<div class="c-footer-terms" >
				<!-- <ul class="terms">
					<li><a href="https://www.cognitoforms.com/reportabuse?form=https%3A%2F%2Fwww.cognitoforms.com%2FMarcusWilliams1%2FHMFPropertySalesDataForm" target="_blank">Report Abuse</a></li>
					<li><a href="https://www.cognitoforms.com/terms" target="_blank">Terms of Service</a></li>
				</ul> -->
			</div>
		</div>

	{!! Form::close(); !!}

</div>	
@stop