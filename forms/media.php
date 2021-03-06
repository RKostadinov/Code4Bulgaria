<div class="container">
    <div class="panel">
        <form role="form" id="contact-form" class="contact-form" method="post" action="#">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Име">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Презиме">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Фамилия">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Имейл">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <select type="text" class="form-control" name="type" id="type">
                        <option>Вестник</option>
                        <option>Списание</option>
                        <option>Радио</option>
                        <option>Телевизия</option>
                        <option>Друго</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="media_name" id="media_name" placeholder="Име на медията">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема на проблема">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control textarea" rows="3" name="description" id="description" placeholder="Описание на проблема"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" class="btn main-btn pull-right" value="Сигнализирай" name="media_send">
                </div>
            </div>
        </form>
    </div>
</div>