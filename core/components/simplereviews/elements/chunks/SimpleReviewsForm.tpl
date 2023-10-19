[[!FormIt?
   &hooks=`SimpleReviewsFormHook`
   &validate=`author:required,content:required`
   &successMessage=`Review sent successfully!`
   &submitVar=`review_submit`
]]

[[!+fi.validation_error_message]]
[[!+fi.error_message:notempty=`<p class="error">[[!+fi.error_message]]</p>`]]
[[!+fi.successMessage:notempty=`<p class="success">[[!+fi.successMessage]]</p>`]]

<form id="reviewform" action="[[~[[*id]]]]" method="post">
   <div>
       <input type="text" name="author" id="author" placeholder="Your name" value="[[!+fi.author]]" required>
       [[!+fi.error.author]]
   </div>

   <div>
       <textarea name="content" id="content" placeholder="Your review">[[!+fi.content]]</textarea>
       [[!+fi.error.content]]
   </div>

   <input type="submit" name="review_submit" value="Send Review">
</form>