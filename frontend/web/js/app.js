$(function(){
   const $leaveComment = $('#leave-comment');
   const $cancelComment = $('#cancel-comment');
   const $createCommentForm = $('#create-comment-form');
   const $commentWrapper = $('#comments-wrapper');
   const $commentCount = $('#comment-count');

   $leaveComment.click(function (){
      $leaveComment
          .attr('rows', '2')
          .closest('.create-comment')
          .addClass('focused');
   });

   $cancelComment.click(function (){
      resetForm()
   });

   $createCommentForm.submit(function (ev){
      ev.preventDefault();

      $.ajax({
         method : $createCommentForm.attr('method'),
         url: $createCommentForm.attr('action'),
         data: $createCommentForm.serializeArray(),
         success: function (response){
            if(response.success) {
               $commentWrapper.prepend(response.comment);
               resetForm();
               $commentCount.text(parseInt($commentCount.text()) +1);
            }
         }
      })
          .done(function (){
             console.log(arguments);
          });
   });


   function resetForm() {
      $leaveComment
          .val('')
          .attr('rows', '1');

      $cancelComment
          .closest('.create-comment')
          .removeClass('focused');
   }

});