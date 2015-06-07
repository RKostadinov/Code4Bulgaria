<?php
require_once("../send_email.php");
sendMail("shop");
?>
<div class="container">
    <div class="panel">
        <form role="form" id="contact-form" class="contact-form">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Име">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Презиме">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Фамилия">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Телефон">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Имейл">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="Name" id="Name" placeholder="Име на верига">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Местоположение на обект">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="text" id="text" placeholder="Тема на проблема">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Описание на проблема"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn main-btn pull-right">Сигнализирай</button>
                </div>
            </div>
        </form>
    </div>
</div>