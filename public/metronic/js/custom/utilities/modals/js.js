// 'use strict';
// var KTCreateAccount = function() {
//  var el;
//  var objectNodeBox;
//  var i;
//  var o;
//  var a;
//  var $scope;
//  var validators = [];
//  return {
//    init : function init() {
//      if (el = document.querySelector("#kt_modal_create_account")) {
//        new bootstrap.Modal(el);
//      }
//      if (objectNodeBox = document.querySelector("#kt_create_account_stepper")) {
//        i = objectNodeBox.querySelector("#kt_create_account_form");
//        o = objectNodeBox.querySelector('[data-kt-stepper-action="submit"]');
//        a = objectNodeBox.querySelector('[data-kt-stepper-action="next"]');
//        ($scope = new KTStepper(objectNodeBox)).on("kt.stepper.changed", function(canCreateDiscussions) {
//          if (9 === $scope.getCurrentStepIndex()) {
//            o.classList.remove("d-none");
//            o.classList.add("d-inline-block");
//            a.classList.add("d-none");
//          } else {
//            if (10 === $scope.getCurrentStepIndex()) {
//              o.classList.add("d-none");
//              a.classList.add("d-none");
//            } else {
//              o.classList.remove("d-inline-block");
//              o.classList.remove("d-none");
//              a.classList.remove("d-none");
//            }
//          }
//        });





//      }
//    }
//  };
// }();
// KTUtil.onDOMContentLoaded(function() {
//  KTCreateAccount.init();
// });
"use strict";
var KTCreateApp = function() {
	var e, t, o, r, a, i, n = [];
	return {
		init: function() {
			(e = document.querySelector("#kt_modal_create_app")) && (new bootstrap.Modal(e), t = document.querySelector("#kt_modal_create_app_stepper"), o = document.querySelector("#kt_modal_create_app_form"), r = t.querySelector('[data-kt-stepper-action="submit"]'), a = t.querySelector('[data-kt-stepper-action="next"]'), (i = new KTStepper(t)).on("kt.stepper.changed", (function(e) {
				4 === i.getCurrentStepIndex() ? (r.classList.remove("d-none"), r.classList.add("d-inline-block"), a.classList.add("d-none")) : 5 === i.getCurrentStepIndex() ? (r.classList.add("d-none"), a.classList.add("d-none")) : (r.classList.remove("d-inline-block"), r.classList.remove("d-none"), a.classList.remove("d-none"))
			})), i.on("kt.stepper.next", (function(e) {
				console.log("stepper.next");
				var t = n[e.getCurrentStepIndex() - 1];
				t ? t.validate().then((function(t) {
					console.log("validated!"), "Valid" == t ? e.goNext() : Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
						icon: "error",
						buttonsStyling: !1,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn btn-light"
						}
					}).then((function() {}))
				})) : (e.goNext(), KTUtil.scrollTop())
			})), i.on("kt.stepper.previous", (function(e) {
				console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
			})), r.addEventListener("click", (function(e) {
				n[3].validate().then((function(t) {
					console.log("validated!"), "Valid" == t ? (e.preventDefault(), r.disabled = !0, r.setAttribute("data-kt-indicator", "on"), setTimeout((function() {
						r.removeAttribute("data-kt-indicator"), r.disabled = !1, i.goNext()
					}), 2e3)) : Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
						icon: "error",
						buttonsStyling: !1,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn btn-light"
						}
					}).then((function() {
						KTUtil.scrollTop()
					}))
				}))
			})), $(o.querySelector('[name="card_expiry_month"]')).on("change", (function() {
				n[3].revalidateField("card_expiry_month")
			})), $(o.querySelector('[name="card_expiry_year"]')).on("change", (function() {
				n[3].revalidateField("card_expiry_year")
			})), n.push(FormValidation.formValidation(o, {
				fields: {
					name: {
						validators: {
							notEmpty: {
								message: "App name is required"
							}
						}
					},

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}
			})), n.push(FormValidation.formValidation(o, {
				fields: {

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}
			})), n.push(FormValidation.formValidation(o, {
				fields: {

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}
			})), n.push(FormValidation.formValidation(o, {
				fields: {
					
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}
			})))
		}
	}
}();
KTUtil.onDOMContentLoaded((function() {
	KTCreateApp.init()
}));
