<div class="formorder">
<button type="button" aria-label="Close" class="formorder__buttonclose ">
<span style="">Закрыть</span>

<span></span>
</button>

<form class="formorder__form" autocomplete="on" action="send.php" method="post">
<fieldset class="formorder__contact-info">
<p>
<label for="name">Имя заказчика</label>
<input type="text" name="name" id="name" required placeholder="Ваше имя и фамилия..">
</p>
<p>
<label for="phone">Телефон заказчика</label>
<input type="tel" name="phone" id="phone" required placeholder="Ваш номер телефона..">
</p>
</fieldset>
<fieldset class="formorder__order-info">
<p>
<label for="address"><span class="address">Адрес заказа</span></label>
<input type="text" name="address" id="address" required placeholder="Ваш адрес..">
</p>
<p>
<label for="datetime"><span class="datetime">Время заказа</span></label>
<input name="datetime" placeholder="Удобное время.." type="text" onmouseenter="(this.type='datetime-local')" id="datetime" />
</p>
<div class="wrapermessage">
<label for="message">Дополнительная информация</label>
<textarea name="message" id="message"  placeholder="Напишите нам.."></textarea>
</div>
<button class="submit" type="submit">Заказать</button>
</fieldset>
<input type="hidden" name="act" value="order">
</form>
</div>