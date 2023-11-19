<?php
$now = \Moment::now();


// Short template


$long_answer_sub_template = <<<SUB_TEMPLATE
	<div class="panel template long-answer" id="" data-attribute-type="single">
		<div class="panel-body mb-10">
			<div class="form-group">
				<div class="mb-10">
					<input type="text" class="form-control input-xlg question-name" id="" name="" placeholder="Question" maxlength="255" minlength="3" required>
				</div>
				<input type="text" class="form-control" value="long answer" readonly>
			</div>
		</div>
		<div class="panel-footer panel-footer-bordered">
			<div class="heading-elements">
				<span class="heading-text text-semibold">Long Answer Question Type</span>
				<div class="pull-right">
					<div class="heading-form">
						<div class="form-group">
							<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
								<input type="checkbox" class="switchery question-required" name="" id="" checked="checked">
								Required
							</label>
						</div>
					</div>
					<button type="button" class="btn bg-danger-400 btn-xs heading-btn question-delete" data-form="" data-form-field="">Delete</button>
				</div>
			</div>
		</div>
	</div>
SUB_TEMPLATE;

$long_answer_main_template = <<<MAIN_TEMPLATE
	<div class="row template long-answer">
		<div class="col-md-12">
			<div class="form-group">
				<label for="" class="label-xlg field-label"><span class="question">Long Answer Question:</span></label>
				<textarea rows="1" cols="5" class="form-control elastic" id="" name="" placeholder="Answer" maxlength="30000" data-rule-min-words="3"></textarea>
			</div>
		</div>
	</div>
MAIN_TEMPLATE;

$multiple_choices_sub_template = <<<SUB_TEMPLATE
	<div class="panel template multiple-choices" id="" data-attribute-type="multiple">
		<div class="panel-body mb-10">
			<div class="form-group mb-10">
				<input type="text" class="form-control input-xlg question-name" id="" name="" placeholder="Question" maxlength="255" minlength="3" required>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group mb-10">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="icon-radio-checked"></i>
							</span>
							<input type="text" id="" name="" class="form-control question-option" placeholder="Option 1" maxlength="255" minlength="3" required>
							<span class="input-group-addon no-padding-bottom">
								<button type="button" class="btn btn-xs btn-default add-option">Add Option</button>
							</span>
						</div>
					</div>
					<div class="options-wrapper">
						<div class="form-group mb-10 hidden" id="">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="icon-radio-checked"></i>
								</span>
								<input type="text" id="" class="form-control question-option" placeholder="Option" disabled>
								<span class="input-group-addon no-padding-bottom">
									<button type="button" class="btn btn-xs btn-default remove-option"><i class="icon-cross2"></i></button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer panel-footer-bordered">
			<div class="heading-elements">
				<span class="heading-text text-semibold">Multiple Choices Question Type</span>
				<div class="pull-right">
					<div class="heading-form">
						<div class="form-group">
							<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
								<input type="checkbox" class="switchery question-required" name="" id="" checked="checked">
								Required
							</label>
						</div>
					</div>
					<button type="button" class="btn bg-danger-400 btn-xs heading-btn question-delete" data-form="" data-form-field="">Delete</button>
				</div>
			</div>
		</div>
	</div>
SUB_TEMPLATE;

$multiple_choices_main_template = <<<MAIN_TEMPLATE
	<div class="row template multiple-choices">
		<div class="col-md-12">
			<div class="form-group">
				<label for="" class="label-xlg field-label"><span class="question">Multiple Choice Question:</span></label>
				<div class="options button radios">
					<div class="radio mt-15 mb-15 sample">
						<label class="option-label">
							<input type="radio" name="name" id="" class="styled"> <span class="option">Option 1</span>
						</label>
					</div>
				</div>
		    </div>
	    </div>
    </div>
MAIN_TEMPLATE;

$checkboxes_sub_template = <<<SUB_TEMPLATE
	<div class="panel template checkboxes" id="" data-attribute-type="multiple">
		<div class="panel-body mb-10">
			<div class="form-group mb-10">
				<input type="text" class="form-control input-xlg question-name" id="" name="" placeholder="Question" maxlength="255" minlength="3" required>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group mb-10">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="icon-checkbox-checked"></i>
							</span>
							<input type="text" id="" name="" class="form-control question-option" placeholder="Option 1" maxlength="255" minlength="3" required>
							<span class="input-group-addon no-padding-bottom">
								<button type="button" class="btn btn-xs btn-default add-option">Add Option</button>
							</span>
						</div>
					</div>
					<div class="options-wrapper">
						<div class="form-group mb-10 hidden" id="">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="icon-checkbox-checked"></i>
								</span>
								<input type="text" id="" class="form-control question-option" placeholder="Option" disabled>
								<span class="input-group-addon no-padding-bottom">
									<button type="type" class="btn btn-xs btn-default remove-option"><i class="icon-cross2"></i></button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer panel-footer-bordered">
			<div class="heading-elements">
				<span class="heading-text text-semibold">Chechboxes Question Type</span>
				<div class="pull-right">
					<div class="heading-form">
						<div class="form-group">
							<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
								<input type="checkbox" class="switchery question-required" name="" id="" checked="checked">
								Required
							</label>
						</div>
					</div>
					<button type="button" class="btn bg-danger-400 btn-xs heading-btn question-delete" data-form="" data-form-field="">Delete</button>
				</div>
			</div>
		</div>
	</div>
SUB_TEMPLATE;

$checkboxes_main_template = <<<MAIN_TEMPLATE
	<div class="row template checkboxes">
		<div class="col-md-12">
			<div class="form-group">
				<label for="" class="label-xlg field-label"><span class="question">Checkbox Question:</span></label>
				<div class="options button checkboxes">
					<div class="checkbox mt-15 mb-15">
						<label>
							<input type="checkbox" class="styled" name=""> <span class="option">Option 1</span>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
MAIN_TEMPLATE;

$drop_down_sub_template = <<<SUB_TEMPLATE
	<div class="panel template drop-down" id="" data-attribute-type="multiple">
		<div class="panel-body mb-10">
			<div class="form-group mb-10">
				<input type="text" class="form-control input-xlg question-name" id="" name="" placeholder="Question" maxlength="255" minlength="3" required>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group mb-10">
						<div class="input-group">
							<span class="input-group-addon sn" data-sn="1" id="">
								1.
							</span>
							<input type="text" id="" name="" class="form-control question-option" placeholder="Option 1" maxlength="255" minlength="3" required>
							<span class="input-group-addon no-padding-bottom">
								<button type="button" class="btn btn-xs btn-default add-option">Add Option</button>
							</span>
						</div>
					</div>
					<div class="options-wrapper">
						<div class="form-group mb-10 hidden" id="">
							<div class="input-group">
								<span class="input-group-addon sn" data-sn="2" id="">
									2.
								</span>
								<input type="text" id="" class="form-control question-option" placeholder="Option" disabled>
								<span class="input-group-addon no-padding-bottom">
									<button type="type" class="btn btn-xs btn-default remove-option"><i class="icon-cross2"></i></button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer panel-footer-bordered">
			<div class="heading-elements">
				<span class="heading-text text-semibold">Drop Down Question Type</span>
				<div class="pull-right">
					<div class="heading-form">
						<div class="form-group">
							<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
								<input type="checkbox" class="switchery question-required" checked="checked">
								Required
							</label>
						</div>
					</div>
					<button type="button" class="btn bg-danger-400 btn-xs heading-btn question-delete">Delete</button>
				</div>
			</div>
		</div>
	</div>
SUB_TEMPLATE;

$drop_down_main_template = <<<MAIN_TEMPLATE
<div class="row template drop-down">
		<div class="col-md-12">
			<div class="form-group">
				<label for="" class="label-xlg field-label"><span class="question">Drop Down Question:</span></label>
				<div class="options select">
					<select class="select" name="" data-width="100%">
					</select>
				</div>
			</div>
		</div>
	</div>
MAIN_TEMPLATE;

$color_picker_sub_template = <<<SUB_TEMPLATE
    <div class="panel template color-picker" id="" data-attribute-type="single">
		<div class="panel-body mb-10">
		<div class="row template color-picker">
			<div class="col-md-4">
				<div class="form-group">
					<label for="fontColorPicker" class="label-xlg field-label"><span class="question">Font Color:</span></label>
					<div class="options select">
						<input type="color" id="fontColorPicker" class="color-picker" style="width: 100px; height: 40px;">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="bgColorPicker" class="label-xlg field-label"><span class="question">Background Color:</span></label>
					<div class="options select">
						<input type="color" id="bgColorPicker" class="color-picker" style="width: 100px; height: 40px;">
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="formColorPicker" class="label-xlg field-label"><span class="question">Form Color:</span></label>
						<div class="options select">
							<input type="color" id="formColorPicker" class="color-picker" style="width: 100px; height: 40px;">
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="panel-footer panel-footer-bordered">
            <div class="heading-elements">
                <span class="heading-text text-semibold">Color Picker</span>
                <div class="pull-right">
                    <div class="heading-form">
                        <div class="form-group">
                        </div>
                    </div>
                    <button type="button" class="btn bg-danger-400 btn-xs heading-btn question-delete" data-form="" data-form-field="">Delete</button>
                </div>
            </div>
        </div>
    </div>
SUB_TEMPLATE;
	
$color_picker_main_template = <<<MAIN_TEMPLATE
    <div class="row template color-picker">
        <div class="col-md-12">
            <div class="form-group">
                <label for="" class="label-xlg field-label"><span class="question">Color Picker Question:</span></label>
                <!-- Add any introductory text or layout adjustments here -->
            </div>
        </div>
        <!-- Include the color picker sub-template here based on your requirements -->
        $color_picker_sub_template
        <!-- Include additional instances of color picker sub-template if needed -->
        <!-- ... -->
    </div>
MAIN_TEMPLATE;


// $color_picker_sub_template = <<<SUB_TEMPLATE

// <div class="panel template color-picker" id="" data-attribute-type="single">

// 		<div class="row template  color-picker">
// 			<div class="col-md-4 ">
// 				<div class="form-group">
// 					<label for="fontColorPicker" class="label-xlg field-label"><span class="question">Font Color:</span></label>
// 					<div class="options select">
// 						<input type="color" id="fontColorPicker" class="color-picker" style="width: 100px; height: 40px;">
// 					</div>
// 				</div>
// 			</div>
// 			<div class="col-md-4">
// 				<div class="form-group">
// 					<label for="formColorPicker" class="label-xlg field-label"><span class="question">Form Color:</span></label>
// 					<div class="options select">
// 						<input type="color" id="formColorPicker" class="color-picker" style="width: 100px; height: 40px;">
// 					</div>
// 				</div>
// 			</div>
// 			<div class="col-md-4">
// 				<div class="form-group">
// 					<label for="bgColorPicker" class="label-xlg field-label"><span class="question">Background Color:</span></label>
// 					<div class="options select">
// 						<input type="color" id="bgColorPicker" class="color-picker" style="width: 100px; height: 40px;">
// 					</div>
// 				</div>
// 			</div>
// 		</div>
// 		<div class="panel-footer panel-footer-bordered">
// 			<div class="heading-elements">
// 				<span class="heading-text text-semibold">Long Answer Question Type</span>
// 				<div class="pull-right">
// 					<div class="heading-form">
// 						<div class="form-group">
// 							<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
// 								<input type="checkbox" class="switchery question-required" name="" id="" checked="checked">
// 								Required
// 							</label>
// 						</div>
// 					</div>
// 					<button type="button" class="btn bg-danger-400 btn-xs heading-btn question-delete" data-form="" data-form-field="">Delete</button>
// 				</div>
// 			</div>
// 		</div>
// 	</div>


// SUB_TEMPLATE;

// $color_picker_main_template = <<<MAIN_TEMPLATE
// 	// <div class="row mx-3 my-2 template drop-down">
// 	// 	<div class="col-md-12">
// 	// 		<div class="form-group">
// 	// 			<label for="" class="label-xlg field-label"><span class="question">Drop Down Question:</span></label>
// 	// 			<div class="options select">
// 	// 				<select class="select" name="" data-width="100%">
// 	// 				</select>
// 	// 			</div>
// 	// 		</div>
// 	// 	</div>
// 	// </div>
// MAIN_TEMPLATE;

// Linear Scale Question Type

$date_sub_template = <<<SUB_TEMPLATE
	<div class="panel template date" id="" data-attribute-type="single">
		<div class="panel-body mb-10">
			<div class="form-group">
				<div class="mb-10">
					<input type="text" class="form-control input-xlg question-name" id="" name="" placeholder="Question" maxlength="255" minlength="3" required>
				</div>
				<div class="input-group col-md-6">
					<span class="input-group-addon">
						<i class="icon-calendar3"></i>
					</span>
					<input type="text" class="form-control" placeholder="Day, Month, Year" readonly>
				</div>
			</div>
		</div>
		<div class="panel-footer panel-footer-bordered">
			<div class="heading-elements">
				<span class="heading-text text-semibold">Date Question Type</span>
				<div class="pull-right">
					<div class="heading-form">
						<div class="form-group">
							<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
								<input type="checkbox" class="switchery question-required" name="" id="" checked="checked">
								Required
							</label>
						</div>
					</div>
					<button type="button" class="btn bg-danger-400 btn-xs heading-btn question-delete" data-form="" data-form-field="">Delete</button>
				</div>
			</div>
		</div>
	</div>
SUB_TEMPLATE;

$current_date = $now->format('jS, F Y');
$date_main_template = <<<MAIN_TEMPLATE
	<div class="row template date">
		<div class="col-md-12">
			<div class="form-group">
				<label for="" class="label-xlg field-label"><span class="question">Date Question:</span></label>
				<input type="date" name="" class="form-control pickadate" value="" placeholder="$current_date" data-msg="Date is required">
			</div>
		</div>
	</div>
MAIN_TEMPLATE;

$time_sub_template = <<<SUB_TEMPLATE
	<div class="panel template time" id="" data-attribute-type="single">
		<div class="panel-body mb-10">
			<div class="form-group">
				<div class="mb-10">
					<input type="text" class="form-control input-xlg question-name" id="" name="" placeholder="Question" maxlength="255" minlength="3" required>
				</div>
				<div class="input-group col-md-6">
					<span class="input-group-addon">
						<i class="icon-alarm"></i>
					</span>
					<input type="text" class="form-control" placeholder="Time" readonly>
				</div>
			</div>
		</div>
		<div class="panel-footer panel-footer-bordered">
			<div class="heading-elements">
				<span class="heading-text text-semibold">Time Question Type</span>
				<div class="pull-right">
					<div class="heading-form">
						<div class="form-group">
							<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
								<input type="checkbox" class="switchery question-required" name="" id="" checked="checked">
								Required
							</label>
						</div>
					</div>
					<button type="button" class="btn bg-danger-400 btn-xs heading-btn question-delete" data-form="" data-form-field="">Delete</button>
				</div>
			</div>
		</div>
	</div>
SUB_TEMPLATE;

$current_time = $now->format('h:i A');
$time_main_template = <<<MAIN_TEMPLATE
	<div class="row template time">
		<div class="col-md-12">
			<div class="form-group">
				<label for="" class="label-xlg field-label"><span class="question">Time Question:</span></label>
				<input type="time" class="form-control pickatime" placeholder="$current_time">
			</div>
		</div>
	</div>
MAIN_TEMPLATE;

return [
	[
		'name' => 'Color Picker',
		'alias' => 'color-picker',
		'sub_template' => $color_picker_sub_template ,
		'main_template' => $color_picker_main_template ,
		'attribute_type' => 'array',
	],
	[
		'name' => 'Long Answer',
		'alias' => 'long-answer',
		'sub_template' => $long_answer_sub_template,
		'main_template' => $long_answer_main_template,
		'attribute_type' => 'string',
	],
	[
		'name' => 'Multiple Choice',
		'alias' => 'multiple-choices',
		'sub_template' => $multiple_choices_sub_template,
		'main_template' => $multiple_choices_main_template,
		'attribute_type' => 'array',
	],
	[
		'name' => 'Chechboxes',
		'alias' => 'checkboxes',
		'sub_template' => $checkboxes_sub_template,
		'main_template' => $checkboxes_main_template,
		'attribute_type' => 'array',
	],
	[
		'name' => 'Drop-down',
		'alias' => 'drop-down',
		'sub_template' => $drop_down_sub_template,
		'main_template' => $drop_down_main_template,
		'attribute_type' => 'array',
	],
	[
		'name' => 'Date',
		'alias' => 'date',
		'sub_template' => $date_sub_template,
		'main_template' => $date_main_template,
		'attribute_type' => 'string',
	],
	[
		'name' => 'Time',
		'alias' => 'time',
		'sub_template' => $time_sub_template,
		'main_template' => $time_main_template,
		'attribute_type' => 'string',
	],
];
