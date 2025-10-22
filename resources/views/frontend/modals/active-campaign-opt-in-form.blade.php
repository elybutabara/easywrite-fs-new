<h6 class="ac-description text-center">
    {!! trans('site.active-campaign.opt-in.description') !!}
</h6>

<div class="form-group">
    <input type="text" class="form-control" placeholder="{{ trans('site.front.form.name') }}"
           name="name">
</div>

<div class="form-group">
    <input type="email" class="form-control" placeholder="{{ trans('site.front.form.email-address') }}"
           name="email">
</div>

<div class="form-group my-5">
    <div class="custom-checkbox">
        <input type="checkbox" class="form-control" name="terms" id="ac_terms">
        <label for="ac_terms">
            {{ trans('site.contact-us.i-accept') }}

            <small>
                <a href="/terms"
                   onclick="window.open(this.href, '', 'resizable=yes,status=no,location=no,toolbar=no,' +
                    'menubar=no,fullscreen=no,scrollbars=no,dependent=no, width=1000, height=600');
                    return false;">
                    {{ trans('site.contact-us.condition') }}
                </a>
            </small>
            <span style="color: rgb(240, 52, 52)">*</span>
        </label>
    </div>
    <input type="hidden" name="accept_terms">
</div>

<button class="btn btn-started submitOptinBtn" onclick="submitOptinForm()">
    <i class="fa fa-spinner fa-pulse mr-2 d-none"></i>
    <span>
        {!! trans('site.send-the-pdf') !!}
    </span>
</button>