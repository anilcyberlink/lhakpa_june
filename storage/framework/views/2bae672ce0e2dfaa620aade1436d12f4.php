
<?php $__env->startSection('content'); ?>

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" style="height:400px;" data-src="<?php echo e(asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary">FEEDBACK FORM</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-section ">
    <div class="uk-container">
        <div class="form-container">
            <div class="form-header">
                <h1 class="uk-white">️ Lhakpa Trekking Feedback Form</h1>
                <p class="subtitle">We truly value your feedback. Your comments help us improve and keep offering high-quality, safe, and memorable adventures in the Himalayas. Thank you for taking the time to share your experience!</p>
            </div>

            <form action="<?php echo e(route('post_feedback')); ?>" method="POST" id="feedbackForm">
                <?php echo csrf_field(); ?>
                <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response" />
                <div class="form-body">
                    <div class="section-header"><span class="emoji-icon">01. </span>About Your Trek</div>

                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-2@s">
                            <label>Trip Name / Region</label>
                            <div class="input-group">
                                <input class="uk-input" name="trip" type="text"
                                       value="<?php echo e(old('trip')); ?>"
                                       placeholder="e.g., Everest Base Camp" required>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <label>Departure Date</label>
                            <div class="input-group">
                                <input class="uk-input" name="departure" type="date"
                                       value="<?php echo e(old('departure')); ?>"
                                       max="<?php echo e(date('Y-m-d')); ?>"
                                       required>
                            </div>
                        </div>
                    </div>

                    <div class="uk-grid-small uk-margin-top" uk-grid>
                        <div class="uk-width-1-2@s">
                            <label>Guide's Name</label>
                            <div class="input-group">
                                <input class="uk-input" type="text" name="guide_name"
                                       value="<?php echo e(old('guide_name')); ?>"
                                       placeholder="Enter guide's name" required>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <label>Your Name (Optional)</label>
                            <div class="input-group">
                                <input class="uk-input" type="text" name="full_name"
                                       value="<?php echo e(old('full_name')); ?>"
                                       placeholder="Enter your name">
                            </div>
                        </div>
                    </div>

                    <div class="uk-margin-top">
                        <label>Nationality</label>
                        <div class="input-group">
                            <input class="uk-input" type="text" name="nationality"
                                   value="<?php echo e(old('nationality')); ?>"
                                   placeholder="Enter your nationality" required>
                        </div>
                    </div>

                    <div class="section-header"><span class="emoji-icon">02. </span>Overall Satisfaction</div>

                    <div class="rating-group">
                        <span class="rating-label">How would you rate your overall trekking experience with us?</span>
                        <div class="rating-options">
                            <input type="radio" name="overall" value="excellent" id="overall-excellent"
                                   <?php echo e(old('overall') == 'excellent' ? 'checked' : ''); ?> required>
                            <label for="overall-excellent">Excellent</label>

                            <input type="radio" name="overall" value="very-good" id="overall-verygood"
                                   <?php echo e(old('overall') == 'very-good' ? 'checked' : ''); ?>>
                            <label for="overall-verygood">Very Good</label>

                            <input type="radio" name="overall" value="good" id="overall-good"
                                   <?php echo e(old('overall') == 'good' ? 'checked' : ''); ?>>
                            <label for="overall-good">Good</label>

                            <input type="radio" name="overall" value="fair" id="overall-fair"
                                   <?php echo e(old('overall') == 'fair' ? 'checked' : ''); ?>>
                            <label for="overall-fair">Fair</label>

                            <input type="radio" name="overall" value="poor" id="overall-poor"
                                   <?php echo e(old('overall') == 'poor' ? 'checked' : ''); ?>>
                            <label for="overall-poor">Poor</label>
                        </div>
                    </div>

                    <div class="rating-group">
                        <span class="rating-label">How would you rate the guide(s)?</span>
                        <div class="rating-options">
                            <input type="radio" name="guide" value="excellent" id="guide-excellent"
                                   <?php echo e(old('guide') == 'excellent' ? 'checked' : ''); ?> required>
                            <label for="guide-excellent">Excellent</label>

                            <input type="radio" name="guide" value="very-good" id="guide-verygood"
                                   <?php echo e(old('guide') == 'very-good' ? 'checked' : ''); ?>>
                            <label for="guide-verygood">Very Good</label>

                            <input type="radio" name="guide" value="good" id="guide-good"
                                   <?php echo e(old('guide') == 'good' ? 'checked' : ''); ?>>
                            <label for="guide-good">Good</label>

                            <input type="radio" name="guide" value="fair" id="guide-fair"
                                   <?php echo e(old('guide') == 'fair' ? 'checked' : ''); ?>>
                            <label for="guide-fair">Fair</label>

                            <input type="radio" name="guide" value="poor" id="guide-poor"
                                   <?php echo e(old('guide') == 'poor' ? 'checked' : ''); ?>>
                            <label for="guide-poor">Poor</label>
                        </div>
                    </div>

                    <div class="rating-group">
                        <span class="rating-label">How would you rate the porter(s) / support staff?</span>
                        <div class="rating-options">
                            <input type="radio" name="porter" value="excellent" id="porter-excellent"
                                   <?php echo e(old('porter') == 'excellent' ? 'checked' : ''); ?> required>
                            <label for="porter-excellent">Excellent</label>

                            <input type="radio" name="porter" value="very-good" id="porter-verygood"
                                   <?php echo e(old('porter') == 'very-good' ? 'checked' : ''); ?>>
                            <label for="porter-verygood">Very Good</label>

                            <input type="radio" name="porter" value="good" id="porter-good"
                                   <?php echo e(old('porter') == 'good' ? 'checked' : ''); ?>>
                            <label for="porter-good">Good</label>

                            <input type="radio" name="porter" value="fair" id="porter-fair"
                                   <?php echo e(old('porter') == 'fair' ? 'checked' : ''); ?>>
                            <label for="porter-fair">Fair</label>

                            <input type="radio" name="porter" value="poor" id="porter-poor"
                                   <?php echo e(old('porter') == 'poor' ? 'checked' : ''); ?>>
                            <label for="porter-poor">Poor</label>
                        </div>
                    </div>

                    <div class="rating-group">
                        <span class="rating-label">How would you rate the quality of accommodation and meals?</span>
                        <div class="rating-options">
                            <input type="radio" name="accommodation" value="excellent" id="accommodation-excellent"
                                   <?php echo e(old('accommodation') == 'excellent' ? 'checked' : ''); ?> required>
                            <label for="accommodation-excellent">Excellent</label>

                            <input type="radio" name="accommodation" value="very-good" id="accommodation-verygood"
                                   <?php echo e(old('accommodation') == 'very-good' ? 'checked' : ''); ?>>
                            <label for="accommodation-verygood">Very Good</label>

                            <input type="radio" name="accommodation" value="good" id="accommodation-good"
                                   <?php echo e(old('accommodation') == 'good' ? 'checked' : ''); ?>>
                            <label for="accommodation-good">Good</label>

                            <input type="radio" name="accommodation" value="fair" id="accommodation-fair"
                                   <?php echo e(old('accommodation') == 'fair' ? 'checked' : ''); ?>>
                            <label for="accommodation-fair">Fair</label>

                            <input type="radio" name="accommodation" value="poor" id="accommodation-poor"
                                   <?php echo e(old('accommodation') == 'poor' ? 'checked' : ''); ?>>
                            <label for="accommodation-poor">Poor</label>
                        </div>
                    </div>

                    <div class="rating-group">
                        <span class="rating-label">Would you recommend Lhakpa Trekking Private Limited to friends or family?</span>
                        <div class="rating-options">
                            <input type="radio" name="recommend" value="yes" id="recommend-yes"
                                   <?php echo e(old('recommend') == 'yes' ? 'checked' : ''); ?> required>
                            <label for="recommend-yes">Yes, definitely</label>

                            <input type="radio" name="recommend" value="maybe" id="recommend-maybe"
                                   <?php echo e(old('recommend') == 'maybe' ? 'checked' : ''); ?>>
                            <label for="recommend-maybe">Maybe</label>

                            <input type="radio" name="recommend" value="no" id="recommend-no"
                                   <?php echo e(old('recommend') == 'no' ? 'checked' : ''); ?>>
                            <label for="recommend-no">No</label>
                        </div>
                    </div>

                    <div class="uk-margin-top">
                        <label>What did you enjoy most?</label>
                        <textarea class="uk-textarea" rows="4" name="favourite"
                                  placeholder="Share your favorite moments from the trek..." required><?php echo e(old('favourite')); ?></textarea>
                    </div>

                    <div class="uk-margin-top">
                        <label>What could we improve?</label>
                        <textarea class="uk-textarea" rows="4" name="improvement" required><?php echo e(old('improvement')); ?></textarea>
                    </div>

                    <div class="section-header"><span class="emoji-icon">03. </span>The Guide & Staff</div>

                    <div class="uk-margin">
                        <label>Was your guide professional and attentive?</label>
                        <textarea class="uk-textarea" name="guide_professionalism" rows="2" required><?php echo e(old('guide_professionalism')); ?></textarea>
                    </div>

                    <div class="uk-margin">
                        <label>Did the guide share interesting local culture & nature information?</label>
                        <textarea class="uk-textarea" name="guide_knowledge" rows="2" required><?php echo e(old('guide_knowledge')); ?></textarea>
                    </div>

                    <div class="uk-margin">
                        <label>How was the support from porters & local staff?</label>
                        <textarea class="uk-textarea" name="porter_support" rows="2" required><?php echo e(old('porter_support')); ?></textarea>
                    </div>

                    <div class="uk-margin">
                        <label>Comments:</label>
                        <textarea class="uk-textarea" name="comments" rows="3" required><?php echo e(old('comments')); ?></textarea>
                    </div>

                    <div class="section-header">
                        <span class="emoji-icon">04. </span>Detailed checklist (can select all that apply)
                    </div>
                    <div class="uk-margin-top">
                        <label>Please tick what applied to your guide:</label>
                        <div id="guide-error" style="display:none; color:#e74c3c; margin-bottom:10px; font-weight:bold;">
                            ⚠️ Please select at least one option
                        </div>

                        <div class="checklist-group">
                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="punctual" id="punctual"
                                       <?php echo e(in_array('punctual', old('guide_qualities', [])) ? 'checked' : ''); ?>>
                                <label for="punctual">Punctual and organized</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="prepared" id="prepared"
                                       <?php echo e(in_array('prepared', old('guide_qualities', [])) ? 'checked' : ''); ?>>
                                <label for="prepared">Well-prepared with knowledge and equipment</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="respectful" id="respectful"
                                       <?php echo e(in_array('respectful', old('guide_qualities', [])) ? 'checked' : ''); ?>>
                                <label for="respectful">Respectful and polite</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="safety" id="safety"
                                       <?php echo e(in_array('safety', old('guide_qualities', [])) ? 'checked' : ''); ?>>
                                <label for="safety">Maintained safety and clear communication</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="guide_qualities[]" value="cultural" id="cultural"
                                       <?php echo e(in_array('cultural', old('guide_qualities', [])) ? 'checked' : ''); ?>>
                                <label for="cultural">Provided cultural and local insights</label>
                            </div>
                        </div>

                        <div class="uk-margin-top">
                            <input class="uk-input" type="text" name="guide_qualities_other"
                                   value="<?php echo e(old('guide_qualities_other')); ?>"
                                   placeholder="Other qualities (please specify)">
                        </div>
                    </div>

                    <div class="uk-margin-top">
                        <label>What mark, between 1 and 20, would you give to the guide's professionalism?</label>
                        <div class="score-input">
                            <input class="uk-input" type="number" name="guide_score"
                                   min="1" max="20"
                                   value="<?php echo e(old('guide_score')); ?>"
                                   placeholder="0" required>
                            <span>/ 20</span>
                        </div>
                    </div>

                    <div class="section-header"><span class="emoji-icon">05. </span>Memorable Moments / Highlights</div>

                    <div class="uk-margin">
                        <label>Share your favorite quote, travel story, or photo/video  with us for a chance to be featured in our magazine and website (with your permission)</label>
                        <textarea class="uk-textarea" rows="5" name="story" required><?php echo e(old('story')); ?></textarea>
                    </div>

                    <div class="section-header"><span class="emoji-icon">06. ️</span>Future Treks</div>

                    <div class="rating-group">
                        <span class="rating-label">Would you like us to inform you about future treks, special offers, or new itineraries?</span>
                        <div class="rating-options">
                            <input type="radio" name="newsletter" value="yes" id="newsletter-yes"
                                   <?php echo e(old('newsletter') == 'yes' ? 'checked' : ''); ?> required>
                            <label for="newsletter-yes">Yes, please</label>

                            <input type="radio" name="newsletter" value="no" id="newsletter-no"
                                   <?php echo e(old('newsletter') == 'no' ? 'checked' : ''); ?>>
                            <label for="newsletter-no">No, thank you</label>
                        </div>
                    </div>

                    <div class="uk-margin-top">
                        <label>If yes, please share your email (optional):</label>
                        <input class="uk-input" type="email" name="email"
                               value="<?php echo e(old('email')); ?>"
                               placeholder="your.email@example.com">
                    </div>

                    <div class="uk-margin-top">
                        <label>Future treks or destinations you are interested in:</label>
                        <div id="dest-error" style="display:none; color:#e74c3c; margin-bottom:10px; font-weight:bold;">
                            ⚠️ Please select at least one destination
                        </div>

                        <div class="checklist-group">
                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="everest" id="everest"
                                       <?php echo e(in_array('everest', old('future_destinations', [])) ? 'checked' : ''); ?>>
                                <label for="everest">Everest region</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="annapurna" id="annapurna"
                                       <?php echo e(in_array('annapurna', old('future_destinations', [])) ? 'checked' : ''); ?>>
                                <label for="annapurna">Annapurna region</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="mustang" id="mustang"
                                       <?php echo e(in_array('mustang', old('future_destinations', [])) ? 'checked' : ''); ?>>
                                <label for="mustang">Mustang</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="dolpo" id="dolpo"
                                       <?php echo e(in_array('dolpo', old('future_destinations', [])) ? 'checked' : ''); ?>>
                                <label for="dolpo">Dolpo</label>
                            </div>

                            <div class="checklist-item">
                                <input type="checkbox" name="future_destinations[]" value="bhutan_tibet" id="bhutan"
                                       <?php echo e(in_array('bhutan_tibet', old('future_destinations', [])) ? 'checked' : ''); ?>>
                                <label for="bhutan">Bhutan / Tibet</label>
                            </div>
                        </div>

                        <div class="uk-margin-top">
                            <input class="uk-input" type="text" name="future_destinations_other"
                                   value="<?php echo e(old('future_destinations_other')); ?>"
                                   placeholder="Other destinations you'd like to explore">
                        </div>
                    </div>

                    <hr>

                    <div class="uk-margin-top">
                        <label>How did you hear about us?</label>

                        <div class="rating-group">
                            <div class="rating-options">
                                <input type="radio" name="heard_about" value="website" id="heard-website"
                                       <?php echo e(old('heard_about') == 'website' ? 'checked' : ''); ?> required>
                                <label for="heard-website">Website</label>

                                <input type="radio" name="heard_about" value="social_media" id="heard-social"
                                       <?php echo e(old('heard_about') == 'social_media' ? 'checked' : ''); ?>>
                                <label for="heard-social">Social media</label>

                                <input type="radio" name="heard_about" value="friend" id="heard-friend"
                                       <?php echo e(old('heard_about') == 'friend' ? 'checked' : ''); ?>>
                                <label for="heard-friend">Friend / recommendation</label>

                                <input type="radio" name="heard_about" value="previous_trip" id="heard-previous"
                                       <?php echo e(old('heard_about') == 'previous_trip' ? 'checked' : ''); ?>>
                                <label for="heard-previous">Previous trip with us</label>

                                <input type="radio" name="heard_about" value="travel_fair" id="heard-fair"
                                       <?php echo e(old('heard_about') == 'travel_fair' ? 'checked' : ''); ?>>
                                <label for="heard-fair">Travel fair / agency</label>

                                <input type="radio" name="heard_about" value="other" id="heard-other"
                                       <?php echo e(old('heard_about') == 'other' ? 'checked' : ''); ?>>
                                <label for="heard-other">Other</label>
                            </div>

                            <input type="text" class="uk-input other-input" name="heard_about_other"
                                   value="<?php echo e(old('heard_about_other')); ?>"
                                   placeholder="Please specify..."
                                   style="margin-top: 15px; display: <?php echo e(old('heard_about') == 'other' ? 'block' : 'none'); ?>;">
                        </div>
                    </div>
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" name="feedback_consent" id="feedback_consent" value="1" required>
                        <label class="form-check-label" for="feedback_consent">
                            I agree that my feedback may be displayed on the website and used on our official social media channels for promotional purposes.
                        </label>
                    </div>

                    <div class="uk-text-center">
                        <button type="submit" class="inquiry-btn" style="padding: 15px;font-size: 15px;margin-bottom: 17px;">Submit Feedback</button>
                    </div>
                </div>
                <div class="form-header">
                    <h1 class="uk-white">Thank You!</h1>
                    <p class="subtitle">Your feedback supports our mission to deliver safe, authentic, and responsible mountain adventures.</p>
                    <p class="subtitle">We empower local communities and help provide quality education in remote areas.</p>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    // Show/hide "Other" text input for "How did you hear about us?"
    document.querySelectorAll('input[name="heard_about"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const otherInput = document.querySelector('.other-input');
            if (this.value === 'other' && this.checked) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = '';
            }
        });
    });

    // Form validation - scroll to first error
    document.getElementById('feedbackForm').addEventListener('submit', function(e) {
        const groups = [
            {
                name: 'guide_qualities[]',
                errorId: 'guide-error',
                otherInput: 'guide_qualities_other'
            },
            {
                name: 'future_destinations[]',
                errorId: 'dest-error',
                otherInput: 'future_destinations_other'
            }
        ];

        let firstError = null;

        groups.forEach(group => {
            const checkboxes = document.querySelectorAll(`input[name="${group.name}"]`);
            const error = document.getElementById(group.errorId);
            const otherField = document.querySelector(`input[name="${group.otherInput}"]`);

            if (!error) return;

            const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
            const otherFilled = otherField && otherField.value.trim() !== '';

            if (!anyChecked && !otherFilled) {
                error.style.display = 'block';

                if (!firstError) {
                    firstError = error;
                }
            } else {
                error.style.display = 'none';
            }
        });

        if (firstError) {
            e.preventDefault();
            firstError.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }
    });

    // Hide error when user checks a box OR fills the other input
    ['guide_qualities[]', 'future_destinations[]'].forEach(name => {
        document.querySelectorAll(`input[name="${name}"]`).forEach(cb => {
            cb.addEventListener('change', () => {
                const errorId = name === 'future_destinations[]' ? 'dest-error' : 'guide-error';
                const error = document.getElementById(errorId);
                if (error) {
                    error.style.display = 'none';
                }
            });
        });

        const otherFieldName = name === 'future_destinations[]' ? 'future_destinations_other' : 'guide_qualities_other';
        const otherField = document.querySelector(`input[name="${otherFieldName}"]`);

        if (otherField) {
            otherField.addEventListener('input', () => {
                const errorId = name === 'future_destinations[]' ? 'dest-error' : 'guide-error';
                const error = document.getElementById(errorId);
                if (error && otherField.value.trim() !== '') {
                    error.style.display = 'none';
                }
            });
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/feedback.blade.php ENDPATH**/ ?>