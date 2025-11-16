<div class="formorder">
<button type="button" aria-label="Close" class="formorder__buttonclose" onclick="click_handler()">
 <span>Close</span>
<span></span>
 </button>
 <form class="formorder__form" autocomplete="on" action="send.php" method="post">
 <fieldset class="formorder__contact-info">
 <p class="formorder__contact-name">
 <label class="name" for="name">Name</label>
 <input type="text" name="name" id="name" required placeholder="Your name..">
 </p>
 <p class="formorder__contact-email">
 <label class="email" for="email">Email adress</label>
 <input type = "email" name="email" id="email" required placeholder="Your email..">
 </p>
 </fieldset>
 <fieldset class="formorder__order-info">
 <div class="formorder__wrapermessage">
 <label class="message" for="message">Message</label>
 <textarea name="message" id="message"  placeholder="Your message.."></textarea>
 </div>
 <button class="formorder__button__submit" type="submit">Submit</button>
 </fieldset>
 <input type="hidden" name="act" value="order">
 </form>
</div>