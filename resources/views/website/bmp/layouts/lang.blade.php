<div class="form-inline my-2 my-lg-0 select-lang">
    <select name="" id="language-select"
        style="color: white !important;padding: 7px 16px;width: 64px;box-shadow: none !important;border: none;border-radius: 3px;">
        @if (app()->getLocale() == 'ar')
            <option value="ar">AR</option>
            <option value="en">EN</option>
        @else
            <option value="en">EN</option>
            <option value="ar">AR</option>
        @endif
    </select>
</div>
