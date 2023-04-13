import domReady from '@roots/sage/client/dom-ready';
import jQuery from 'jquery';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);


jQuery(document).ready(function($) {
  $('#close').click(function() {

    var $overlay = $('#overlay');
    var $dialog = $('#dialog');
    
    $dialog.addClass('hidden');
    $overlay.addClass('hidden');
  });

$('.course_start').click(function() {
  console.log('clicked');
   var $overlay = $('#connective_overlay');
   var $dialog = $('#connective_dialog');
   
   $dialog.removeClass('hidden');
   $overlay.removeClass('hidden');
 });

 $('#connective_close').click(function() {

   var $overlay = $('#connective_overlay');
   var $dialog = $('#connective_dialog');
   
   $dialog.addClass('hidden');
   $overlay.addClass('hidden');
 });

 $('.course_detail').click(function() {
  console.log('cliklasjdf');
   var $overlay = $('#bookdetail_overlay');
   var $dialog = $('#bookdetail_dialog');
   
   $dialog.removeClass('hidden');
   $overlay.removeClass('hidden');
 });

 $('#bookdetail_close').click(function() {

   var $overlay = $('#bookdetail_overlay');
   var $dialog = $('#bookdetail_dialog');
   
   $dialog.addClass('hidden');
   $overlay.addClass('hidden');
 });

 $('.course_name').click(function() {
   var $overlay = $('#coursename_overlay');
   var $dialog = $('#coursename_dialog');
   
   $dialog.removeClass('hidden');
   $overlay.removeClass('hidden');
 });

 $('#coursename_close').click(function() {

   var $overlay = $('#coursename_overlay');
   var $dialog = $('#coursename_dialog');
   
   $dialog.addClass('hidden');
   $overlay.addClass('hidden');
 });

//  $('.free_submit').click(function() {
//   if ($('p.error-message').text().trim() === '') {
//     alert('empty strings');
//   } else {
//     alert('non empty strings');
//   }
// });
// $('form').submit(function(e){
//   e.preventDefault(); // prevent the form from submitting

//   var allFieldsFilled = true;
//   var allCheckboxesChecked = true;

//   // iterate through all input fields and checkboxes
//   $('input, select, input[type=checkbox]').each(function() {
//     // check if the field or checkbox is empty or unchecked
//     if ($(this).is('select') && $(this).val() === '') {
//       allFieldsFilled = false;
//       return false; // exit the loop early
//     } else if ($(this).is(':checkbox') && !$(this).is(':checked')) {
//       allCheckboxesChecked = false;
//       return false; // exit the loop early
//     } else if ($(this).is(':text') && $(this).val().trim() === '') {
//       allFieldsFilled = false;
//       return false; // exit the loop early
//     }
//   });

//   if ($('.error-message').text().trim() === '') {
//     allFieldsFilled = false;
//   }

//   // display an error message if any field is empty or checkbox is unchecked
//   if (!allFieldsFilled || !allCheckboxesChecked) {
//     alert('Please fill out all fields and select all checkboxes.');
//     return false;
//   }

//   // otherwise, submit the form
//   alert('All fields and checkboxes are filled.');
//   // $('#myForm').submit(); // uncomment this line to submit the form
// });
 
});

