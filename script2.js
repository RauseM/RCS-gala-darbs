/* navbaram*/
$(window).scroll(function() {
	var $height = $(window).scrollTop();
  if($height > 50) {
        $(".btn-toTop").fadeIn();
		$('.navbar').addClass('active');
	} else {
        $(".btn-toTop").fadeOut();
		$('.navbar').removeClass('active');
	}
});



function openNav() {
  document.getElementById("mySidenav").style.width = "427px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

var lvLang = {
  errorTitle: 'Formas nosإ«tؤ«إ،ana neizdevؤپs!',
  requiredFields: 'Jإ«s neesat atbildؤ“jis uz visiem obligؤپtajiem laukiem',
  badTime: 'Jإ«s neesat norؤپdؤ«jis pareizu laiku',
  badEmail: 'Jإ«s neesat norؤپdؤ«jis pareizu e-pasta adresi',
  badTelephone: 'Jإ«s neesat norؤپdؤ«jis pareizu tؤپlruإ†a numuru',
  badSecurityAnswer: 'Jإ«s neesat snieguإ،i pareizu atbildi uz droإ،ؤ«bas jautؤپjumu',
  badDate: 'Jإ«s neesat norؤپdؤ«jis pareizu datumu',
  lengthBadStart: 'Simbolu skaitam jؤپbإ«t starp ',
  lengthBadEnd: ' rakstzؤ«mes',
  lengthTooLongStart: 'Simbolu skaits ir lielؤپks par ',
  lengthTooShortStart: 'Simbolu skaits ir mazؤپks nekؤپ ',
  notConfirmed: 'Input values could not be confirmed',
  badDomain: 'Incorrect domain value',
  badUrl: 'The input value is not a correct URL',
  badCustomVal: 'The input value is incorrect',
  andSpaces: ' and spaces ',
  badInt: 'The input value was not a correct number',
  badSecurityNumber: 'Your social security number was incorrect',
  badUKVatAnswer: 'Incorrect UK VAT Number',
  badStrength: 'The password isn\'t strong enough',
  badNumberOfSelectedOptionsStart: 'You have to choose at least ',
  badNumberOfSelectedOptionsEnd: ' answers',
  badAlphaNumeric: 'Ieejas vؤ“rtؤ«ba var saturؤ“t tikai burtciparu rakstzؤ«mes ',
  badAlphaNumericExtra: ' un ',
  wrongFileSize: 'The file you are trying to upload is too large (max %s)',
  wrongFileType: 'Only files of type %s is allowed',
  groupCheckedRangeStart: 'Please choose between ',
  groupCheckedTooFewStart: 'Please choose at least ',
  groupCheckedTooManyStart: 'Please choose a maximum of ',
  groupCheckedEnd: ' item(s)',
  badCreditCard: 'The credit card number is not correct',
  badCVV: 'The CVV number was not correct',
  wrongFileDim : 'Incorrect image dimensions,',
  imageTooTall : 'the image can not be taller than',
  imageTooWide : 'the image can not be wider than',
  imageTooSmall : 'the image was too small',
  min : 'min',
  max : 'max',
  imageRatioNotAccepted : 'Image ratio is not accepted'
};

