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

    var app = new Vue({
        el: '#app-1',
        data: {
            teacher_id: '{{ Auth::guard('teacher')->user()->id }}',
            book_id: '',
            book_title: '',
            part_title: '',
            chapter_title: '',
            lesson_title: '',
            parts: [],
            part_index: '',
            chapters: [],
            chapter_index: '',
            lessons: [],
            lesson_index: '',

        },
        methods: {
            store: function(){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}',
                    }
                });
                console.log(this.$data);
                $.ajax ({
                    type: 'POST',
                    data: {
                        teacher_id: app.teacher_id,
                        title: app.book_title,
                        parts: app.parts,
                        chapters: app.chapters,
                        lessons: app.lessons,
                    },
                    url: '{{ route('library.store')}}',
                    success: function(res){
                        console.log(res);

                        swal({
                            text: 'تم إضافة الكتاب بنجاح',
                            type: "success",
                            buttonsStyling: false,
                            confirmButtonText: " حسنا !",
                            confirmButtonClass: "btn font-weight-bold btn-light"
                        }).then(function () {
                            window.location.href = '{{route('library.index')}}';
                        });
                    },
                    error: function(err){

                        swal({
                            text: err,
                            type: "error",
                            buttonsStyling: false,
                            confirmButtonText: "حسنا !",
                            confirmButtonClass: "btn font-weight-bold btn-light"
                        }).then(function () {
                            KTApp.scrollTop();
                        });
                    }
                });

            },
            removePart: function(part_index){
                this.parts.splice(part_index, 1);
            },
            removeChapter: function(chapter_index){
                this.chapters.splice(chapter_index, 1);
            },
            removeLesson: function(lesson_index){
                this.lessons.splice(lesson_index, 1);
            },
            addPart: function(){
                if(this.is_empty(this.part_title, 'اسم الباب مطلوب!')){
                    return;
                }
                this.parts.push({
                    title: this.part_title,
                    chapters: []
                });
                this.part_title = '';



            },
            addChapter: function(){
                if(this.is_empty(this.chapter_title, 'اسم الفصل مطلوب!')){
                    return;
                }
                this.parts[this.part_index].chapters.push({
                    title: this.chapter_title,
                    lessons: []
                });
                this.chapters = this.parts[this.part_index].chapters;
                this.chapter_title = '';
            },

            addLesson: function(){
                if(this.is_empty(this.lesson_title, 'اسم الدرس مطلوب!')){
                    return;
                }
                this.parts[this.part_index].chapters[this.chapter_index].lessons.push({
                    title: this.lesson_title,
                });
                this.lessons = this.parts[this.part_index].chapters[this.chapter_index].lessons;
                this.lesson_title = '';
            },

            is_empty: function(val, err){
                if(val === '' || val === null){
                    swal({
                        text: err,
                        type: "error",
                        buttonsStyling: false,
                        confirmButtonText: "حسنا !",
                        confirmButtonClass: "btn font-weight-bold btn-light"
                    }).then(function () {
                        KTUtil.scrollTop();
                    });
                    return true;
                }
                return false;

            },
        },
    });
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
                fields : {
                    book_title: {
                      validators : {
                        notEmpty : {
                          message : "الكتاب مطلوب"
                        }
                      }

                  },


                   },
			})), n.push(FormValidation.formValidation(o, {
				fields: {
					part_title: {
						validators: {
							notEmpty: {
                                message : "الباب مطلوب"
							}
						}
					}
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
					chapter_title : {
                                 validators : {
                                   notEmpty : {
                                     message : "الفصل مطلوب"
                                   }
                                 }
                               }
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
					lesson_title : {
                        validators : {
                          notEmpty : {
                            message : "الدرس مطلوب"
                          }
                        }
                      }
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
