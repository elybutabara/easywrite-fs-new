<template>
    <div class="card" id="scrollHere">
        <h1 class="font-barlow-regular mb-4 p-3">
            {{ trans('site.learner.renew-text') }} {{courseTaken.package.course.title}}
        </h1>

        <form-wizard color="#c12938" error-color="#ff4949"
                     :nextButtonText="trans('site.paginate.next')" :backButtonText="trans('site.back')"
                     :finishButtonText="trans('site.front.buy')" title="" subtitle="">
            <tab-content :title="'Bestillingsskjema'" icon="fa fa-clipboard-list">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>
                                <h3 class="font-barlow-medium">{{ trans('site.front.course-text') }}</h3>
                                <p>
                                    <b>{{courseTaken.package.course.title}}</b>
                                </p>
                            </td>
                            <td>
                                <h3 class="font-barlow-medium">{{ trans('site.learner.current-package-text') }}</h3>
                                <p>
                                    <b>{{courseTaken.package.variation}}</b>
                                </p>
                                <div v-html="courseTaken.package.description_formatted">
                                </div>
                            </td>
                            <td width="30%">
                                <h3>{{ trans('site.front.form.course-package') }}:</h3>
                                <div class="package-option custom-radio">
                                    <input type="radio" name="package_id" :id="currentPackage.variation"
                                        v-model="orderForm.package_id"
                                        :value="currentPackage.id">
                                    <label :for="currentPackage.variation" v-text="currentPackage.variation" 
                                    class="font-weight-normal"></label>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-right h3">{{ trans('site.front.price') }}:</td>
                            <td class="text-right h3 text-red" width="200">
                                {{ orderForm.price | currency('SEK', 2, currencyOptions) }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-right h3">{{ trans('site.front.total') }}:</td>
                            <td class="text-right h3 text-red">
                                {{ totalPrice | currency('SEK', 2, currencyOptions) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </tab-content> <!-- end order details tab -->

            <tab-content :title="trans('site.front.form.user-information')" icon="fas fa-id-card"
                         :before-change="validateForm" style="min-height: 300px">

                <div class="form-group">
                    <label for="email" class="control-label">
                        {{ trans('site.front.form.email') }}
                    </label>
                    <input type="email" id="email" class="form-control" name="email" required
                           v-model="orderForm.email"
                           :disabled="currentUser"
                           :placeholder="trans('site.front.form.email')">
                </div> <!-- end email form-group -->

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="first_name" class="control-label">
                            {{ trans('site.first-name') }}
                        </label>
                        <input type="text" id="first_name" class="form-control" name="first_name" required
                               v-model="orderForm.first_name"
                               :disabled="currentUser"
                               :placeholder="trans('site.first-name')">
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="control-label">
                            {{ trans('site.last-name') }}
                        </label>
                        <input type="text" id="last_name" class="form-control" name="last_name" required
                               v-model="orderForm.last_name"
                               :disabled="currentUser"
                               :placeholder="trans('site.last-name')">
                    </div>
                </div> <!-- end first and last name -->

                <div class="form-group">
                    <label for="street" class="control-label">
                        {{ trans('site.front.form.street') }}
                    </label>
                    <input type="text" id="street" class="form-control" name="street" required
                           v-model="orderForm.street"
                           :placeholder="trans('site.checkout.street')">
                </div> <!-- end street -->

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="zip" class="control-label">{{ trans('site.front.form.zip') }}</label>
                        <input type="text" id="zip" class="form-control" name="zip" required
                               v-model="orderForm.zip" :placeholder="trans('site.checkout.zip')">
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="control-label">{{ trans('site.front.form.city') }}</label>
                        <input type="text" id="city" class="form-control" name="city" required
                               v-model="orderForm.city" :placeholder="trans('site.checkout.city')">
                    </div>
                </div> <!-- end zip, city -->

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="phone" class="control-label">
                            {{ trans('site.front.form.phone-number') }}
                        </label>
                        <input type="text" id="phone" class="form-control" name="phone" required
                               v-model="orderForm.phone" :placeholder="trans('site.checkout.phone')">
                    </div>

                    <div class="col-md-6" v-if="!currentUser">
                        <label for="password" class="control-label">
                            {{ trans('site.front.form.create-password') }}
                        </label>
                        <input type="password" id="password" class="form-control"
                               name="password" required :placeholder="trans('site.front.form.create-password')"
                               v-model="orderForm.password">
                    </div>
                </div>
            </tab-content>
            <tab-content :title="trans('site.checkout.payment-details')" icon="fas fa-credit-card"
                         :before-change="validateForm">

                <div id="checkout-display"></div>

            </tab-content>

            <button slot="finish" class="d-none">{{ trans('site.checkout.finish') }}</button>
        </form-wizard>
    </div>
</template>

<script>
export default {
    props: {
        courseTaken: Object,
        currentPackage: Object,
        currentUser: Object,
    },

    data() {
        return {
            orderForm: {
                email: '',
                first_name: '',
                last_name: '',
                street: '',
                zip: '',
                city: '',
                phone: '',
                password: '',
                price: 1290,
                package_id: this.currentPackage.id,
                payment_plan_id: 8,
                payment_mode_id: 1,
                mobile_number: "",
                order_type: 11,
                course_taken_id: this.courseTaken.id
            },
            totalPrice: 1290,
            currencyOptions: {
                thousandsSeparator: '.',
                decimalSeparator: ',',
                spaceBetweenAmountAndSymbol: true
            },
            requestUrl: '/account/course-taken/' + this.courseTaken.id
        }
    },

    methods: {
        loadOptions() {
            this.orderForm.email = this.currentUser ? this.currentUser.email : '';
            this.orderForm.first_name = this.currentUser ? this.currentUser.first_name : '';
            this.orderForm.last_name = this.currentUser ? this.currentUser.last_name : '';
            this.orderForm.street = this.currentUser && this.currentUser.address ? this.currentUser.address.street
                : '';
            this.orderForm.zip = this.currentUser && this.currentUser.address ? this.currentUser.address.zip : '';
            this.orderForm.city = this.currentUser && this.currentUser.address ? this.currentUser.address.city : '';
            this.orderForm.phone = this.currentUser && this.currentUser.address ? this.currentUser.address.phone : '';
            this.orderForm.national_id = this.currentUser && this.currentUser.address ? this.currentUser.address.national_id : '';
        },

        validateForm() {
            console.log("inside validate form");
            let self = this;
            self.removeValidationError();

            return axios.post(self.requestUrl+'/validate-form', self.orderForm).then(response => {
                self.scrollTop();
                console.log(response.data);
                $("#checkout-display").html(response.data);
                return true;
            }).catch(error => {

                this.processError(error);

            });
        },

        scrollTop() {
            let time = 5;
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#scrollHere").offset().top
            }, 2000);
        }
    },

    mounted() {
        console.log("inside renew here");
        console.log(this.orderForm);
        this.loadOptions();
    }
}
</script>