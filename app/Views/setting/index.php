<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />

<?php
$es_options = $es_options ?? [];

function is_checked($key, $options) {
    return !empty($options[$key]) && $options[$key] === "on" ? 'checked' : '';
}

function get_value($key, $options) {
    return isset($options[$key]) ? esc_attr($options[$key]) : 'off';
}
?>

<div class="es_form-wrapper">
  <div class="es_form-container">
    <h2 class="es_form-title">تنظیمات پیامک</h2>
    <form action="" method="post">
      <label for="es_api-key" class="es_form-label">کلید API:</label>
      <input type="text" id="es_api-key" name="api-key" class="es_input-text" placeholder="مثلاً: 12345ABCDEF"
             value="<?php echo get_value('_es_api-key', $es_options); ?>">

      <div class="es_checkbox-group">
        <label class="es_checkbox-label">
          <input type="checkbox" name="sms-report" class="es_checkbox-input"
          value="<?php echo get_value('_es_sms-report', $es_options); ?>"
                 <?php echo is_checked('_es_sms-report', $es_options); ?>> 
          <span class="es_checkbox-text">دریافت پیامک گزارش خرید</span>
        </label>

        <label class="es_checkbox-label">
          <input type="checkbox" name="after-purchase" class="es_checkbox-input"
          value="<?php echo get_value('_es_after-purchase', $es_options); ?>"
                 <?php echo is_checked('_es_after-purchase', $es_options); ?>
                 > 
          <span class="es_checkbox-text">ارسال پیامک بعد از خرید</span>
        </label>

        <label class="es_checkbox-label">
          <input type="checkbox" name="after-complete" class="es_checkbox-input"
           value="<?php echo get_value('_es_after-complete', $es_options); ?>"
                 <?php echo is_checked('_es_after-complete', $es_options); ?>> 
          <span class="es_checkbox-text">ارسال پیامک بعد از تکمیل</span>
        </label>

        <label class="es_checkbox-label">
          <input type="checkbox" name="tracking-code" class="es_checkbox-input"
               value="<?php echo get_value('_es_tracking-code', $es_options); ?>"
                 <?php echo is_checked('_es_tracking-code', $es_options); ?>> 
          <span class="es_checkbox-text">ارسال پیامک کد رهگیری</span>
        </label>
      </div>

      <button type="submit" name="submit" class="es_submit-button">ثبت تنظیمات</button>
    </form>
  </div>
</div>

<style>
  /* @import url('https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css'); */

  .es_form-wrapper {
    direction: rtl !important;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    padding: 50px 20px;
    background: linear-gradient(135deg, #f3e8ff, #b6f0ff);
    font-family: 'Vazir', sans-serif;
  }

  .es_form-container {
    background: rgba(255, 255, 255, 0.98);
    border-radius: 25px;
    padding: 40px 45px;
    box-shadow: 0 12px 30px rgba(117, 70, 229, 0.2);
    width: 100%;
    max-width: 460px;
    backdrop-filter: saturate(180%) blur(14px);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
  }
  .es_form-container:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 45px rgba(117, 70, 229, 0.35);
  }

  .es_form-title {
    text-align: center;
    color: #7546e5;
    margin-bottom: 28px;
    font-size: 30px;
    font-weight: 900;
    letter-spacing: 1.3px;
    text-shadow: 0 2px 6px rgba(117, 70, 229, 0.25);
  }

  .es_form-label {
    display: block;
    margin: 16px 0 10px;
    color: #333;
    font-weight: 700;
    font-size: 17px;
  }

  .es_input-text {
    width: 100%;
    padding: 14px 20px;
    border: 2.5px solid #7e57c2;
    border-radius: 15px;
    font-size: 16.5px;
    outline: none;
    transition: border-color 0.35s ease, box-shadow 0.35s ease;
    box-shadow: inset 0 1px 5px #d1c4e9;
    font-family: 'Vazir', sans-serif;
  }

  .es_input-text::placeholder {
    color: #9c9c9c;
    font-style: italic;
  }

  .es_input-text:focus {
    border-color: #5e35b1;
    box-shadow: 0 0 12px #9575cd;
  }

  .es_checkbox-group {
    margin: 30px 0 38px;
  }

  .es_checkbox-label {
    font-weight: 600;
    color: #444;
    display: flex;
    align-items: center;
    margin-bottom: 18px;
    font-size: 16px;
    cursor: pointer;
    user-select: none;
    transition: color 0.3s ease;
  }
  .es_checkbox-label:hover {
    color: #5e35b1;
  }

  .es_checkbox-input {
    margin-left: 20px;
    transform: scale(1.4);
    accent-color: #7e57c2;
    cursor: pointer;
    transition: accent-color 0.3s ease;
  }
  .es_checkbox-input:focus {
    outline-offset: 2px;
    outline: 3px solid #5e35b1;
  }

  .es_checkbox-text {
    line-height: 1.3;
    padding-right: 8px;
  }

  .es_submit-button {
    background: linear-gradient(45deg, #7e57c2, #b39ddb);
    color: white;
    padding: 16px 0;
    border: none;
    border-radius: 20px;
    width: 100%;
    font-size: 19px;
    cursor: pointer;
    font-weight: 900;
    box-shadow: 0 9px 22px rgba(126, 87, 194, 0.6);
    transition: background 0.4s ease, box-shadow 0.4s ease;
    font-family: 'Vazir', sans-serif;
  }

  .es_submit-button:hover {
    background: linear-gradient(45deg, #5e35b1, #9575cd);
    box-shadow: 0 14px 35px rgba(94, 53, 177, 0.8);
  }
</style>
