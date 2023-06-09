<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseHistoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'date'                                                              => 'required',
            'teacher_id'                                                        => 'required',
            'student_id'                                                        => 'nullable',
            'phone'                                                             => 'nullable',
            'email'                                                             => 'nullable',
            'address'                                                           => 'nullable',
            'has_adjustment_capability'                                         => 'nullable',
            'has_move_ability'                                                  => 'nullable',
            'has_fine_equipment_use_ability'                                    => 'nullable',
            'has_write_ability'                                                 => 'nullable',
            'has_education_intersted'                                           => 'nullable',
            'has_self_work_capabelity'                                          => 'nullable',
            'has_abil_to_comminite_socilely'                                    => 'nullable',
            'is_ableto_paly_others'                                             => 'nullable',
            'has_any_learning_obstacle'                                         => 'nullable',
            'has_control_over_body'                                             => 'nullable',
            'has_speaking_problem'                                              => 'nullable',
            'has_speaking_problem_secondary'                                    => 'nullable',
            'is_able_to_understand_tense'                                       => 'nullable',
            'is_able_to_use_correct_word_in_sentence'                           => 'nullable',
            'is_able_to_use_correct_word_in_sentence_secondary'                 => 'nullable',
            'has_past_assessment_by_specialist'                                 => 'nullable',
            'has_past_assessment_by_specialist_secondary'                       => 'nullable',
//            'is_there_any_family_history_of_disability'                         => 'nullable',
            'do_you_have_any_learning_difficulties_in_learning_the_language'    => 'nullable',
            'has_family_learning_disability'                                    => 'nullable',
            // 'has_instability'                                                   => 'nullable',
            'child_description'                                                 => 'nullable',
            'child_description_secondary'                                       => 'nullable',
            'has_sleep_patten_problem'                                          => 'nullable',
            'has_sleep_patten_problem_secondary'                                => 'nullable',
            'is_able_to_lick'                                                   => 'nullable',
            'is_able_to_eat_hard_thing'                                         => 'nullable',
            'is_able_to_control_breathing'                                      => 'nullable',
            'does_swallow_food_at_once'                                         => 'nullable',
            'does_take_longer_time_while_eating'                                => 'nullable',
            'is_any_problem_in_chewing_food'                                    => 'nullable',
            'is_any_problem_in_chewing_food_secondary'                          => 'nullable',
            'sat_alone_in'                                                      => 'nullable',
            'learned_to_chewing_in'                                             => 'nullable',
            'learned_to_scrolling_in'                                           => 'nullable',
            'learned_to_walk_alone_in'                                          => 'nullable',
            'is_able_to_chewing'                                                => 'nullable',
            'is_able_to_swimming'                                               => 'nullable',
            'dose_like_play_outside'                                            => 'nullable',
            'dose_get_tired_soon'                                               => 'nullable',
            'dose_get_tired_soon_secondary'                                     => 'nullable',
            'dose_have_balancing_problem'                                       => 'nullable',
            'dose_have_muscle_pain'                                             => 'nullable',
            'first_voice_lang'                                                  => 'nullable',
            'first_voice_lang_secondary'                                        => 'nullable',
            'in_which_age_spoke_the_first_word'                                 => 'nullable',
            'in_which_age_spoke_the_first_word_secondary'                       => 'nullable',
            'is_able_spake_simple_sentence'                                     => 'nullable',
            'how_many_word_use_in_a_sentence_max'                               => 'nullable',
            'dose_spake_in_other_lang'                                          => 'nullable',
            'dose_spake_in_other_lang_secondary'                                => 'nullable',
            'from_which_year_learning_other_lang'                               => 'nullable',
            'from_where_learn_other_lang'                                       => 'nullable',
            'does_he_response_if_call_by_his_name'                              => 'nullable',
            'can_give_simple_instruction_and_follow_direction'                  => 'nullable',
            'dose_use_wrong_word_while_speaking'                                => 'nullable',
            'in_which_sound_child_react'                                        => 'nullable',
            'does_follow_verbal_commend'                                        => 'nullable',
            'is_able_to_use_right_word_for_right_sentence'                      => 'nullable',
            'can_use_spoon'                                                     => 'nullable',
            'can_wear_cloth_alone'                                              => 'nullable',
            'can_wear_cloth_alone_secondary'                                    => 'nullable',
            'can_arrange_own_things'                                            => 'nullable',
            'in_which_age_got_toilet_training'                                  => 'nullable',
            'does_go_to_toilet_himself'                                         => 'nullable',
            'does_go_to_toilet_in_unknown_place'                                => 'nullable',
            'does_like_drawing_and_writing_in_home'                             => 'nullable',
            'does_like_play'                                                    => 'nullable',
            'can_play_independently'                                            => 'nullable',
            'favorite_games'                                                    => 'nullable',
            'favorite_games_secondary'                                          => 'nullable',
            'can_obey_elder_commends'                                           => 'nullable',
            'do_you_things_obey_elder_elder_is_heard'                           => 'nullable',
            'can_clean_himself_after_properly'                                  => 'nullable',
            'can_wear_cloth_himself_after_properly'                             => 'nullable',
            'does_play_with_siblings'                                           => 'nullable',
            'does_friend_come_to_play_in_home'                                  => 'nullable',
            'does_share_toys'                                                   => 'nullable',
            'does_wait_for_his_turn'                                            => 'nullable',
            'does_careless_for_others'                                          => 'nullable',
            'are_you_tense_for_specific_behaviour'                              => 'nullable',
            'are_you_tense_for_specific_behaviour_secondary'                    => 'nullable',
            'concerning_points_of_child_school_work'                            => 'nullable',
            'is_curious_to_learn_new_things'                                    => 'nullable',
            'can_understand_simple_things_right_way'                            => 'nullable',
            'can_learn_word_spelling'                                           => 'nullable',
            'can_write_himself'                                                 => 'nullable',
            'working_speed'                                                     => 'nullable',
            'how_long_child_can_remember_after_teaching'                        => 'nullable',
            'is_home_work_a_simple_things'                                      => 'nullable',
            'does_change_behaviour_during_homework'                             => 'nullable',
            'is_he_angry'                                                       => 'nullable',
            'does_feel_messy_about_paper_and_books'                             => 'nullable',
            'does_lose_different_things_from_bags_regularly'                    => 'nullable',
            'does_irrelevant_work_during_meal'                                  => 'nullable',
            'does_scream_during_wearing_cloth'                                  => 'nullable',
            'how_you_will_describe_you_child'                                   => 'nullable',
            'bath'                                                              => 'nullable',
            'bath_secondary'                                                    => 'nullable',
            'necessary_things'                                                  => 'nullable',
            'necessary_things_secondary'                                        => 'nullable',
            'does_have_the_navigation_capability'                               => 'nullable',
            'play'                                                              => 'nullable',
            'mobility'                                                          => 'nullable',
            'does_like_routine'                                                 => 'nullable',
            'does_accept_routing_change'                                        => 'nullable',
            'does_like_new_situation'                                           => 'nullable',
            'can_not_obey_regularity'                                           => 'nullable',
            'does_get_angry_quickly'                                            => 'nullable',
            'does_get_disappointed_quickly'                                     => 'nullable',
            'does_stop_working'                                                 => 'nullable',
            'is_there_instability'                                              => 'nullable',
            'can_stay_longer_if_needed'                                         => 'nullable',
            'does_have_tremendous_behaviors_at_home'                            => 'nullable',
            'seems_like_not_interested_in_playing'                              => 'nullable',
            'does_have_time_sense'                                              => 'nullable',
            'doest_have_knowledge_problem_about_day_monty_and_time'             => 'nullable',
            'response'                                                          => 'nullable',
            'day_dreamer'                                                       => 'nullable',
            'does_move_in_one_place'                                            => 'nullable',
            'does_move'                                                         => 'nullable',
            'does_move_all_time'                                                => 'nullable',
            'does_like_to_sit_straight'                                         => 'nullable',
            'is_expert_play_with_ball'                                          => 'nullable',
            'does_ignore_playing_with_ball'                                     => 'nullable',
            'does_like_to_destroy'                                              => 'nullable',
            'does_run_in_wrong_way'                                             => 'nullable',
            'does_height_movement_be_careful_when_going_down_stairs'            => 'nullable',
            'try_to_ignore_task'                                                => 'nullable',
            'which_kind_of_task_he_try_to_skip'                                 => 'nullable',
            'lost_again_and_again'                                              => 'nullable',
            'learned_thestructure'                                              => 'nullable',
            'can_you_speak_any_other_language'                                  => 'nullable',
            'can_use_language_correctly'                                        => 'nullable',
            'does_the_toilet_use_alone'                                         => 'nullable',
            'does_have_tremendous_behaviors_at_home_secondary'                  => 'nullable',
            'staying_in_motion_all_the_time'                                    => 'nullable',
            'i_listen_to_the_baby_later'                                        => 'nullable',
            'how_would_you_describe_the_child'                                  => 'nullable',
            'three_main_concerns'                                               => 'nullable',
            'whether_the_eyes_were_examined'                                    => 'nullable',
//            'whether_the_eyes_were_examined_secondary'                          => 'nullable',
            'report_if_eye_examination_has_been_done'                           => 'nullable',
            'hearing_attach_report_if_checked'                                  => 'nullable',
            'hearing_attach_report_if_checked_secondary'                        => 'nullable',
            'any_problems_during_pregnancy_or_at_birth'                         => 'nullable',
//            'any_problems_during_pregnancy_or_at_birth_secondary'               => 'nullable',
            'whether_the_child_received_any_head_injuries'                      => 'nullable',
            'whether_there_is_caesar'                                           => 'nullable',
            'the_baby_had_an_ear_infection_or_a_problem'                        => 'nullable',
//            'the_baby_had_an_ear_infection_or_a_problem_secondary'              => 'nullable',
            'what_kind_of_ear_problems'                                         => 'nullable',
//            'what_kind_of_ear_problems_secondary'                               => 'nullable',
            'no_illness_or_hospitalization_was_required'                        => 'nullable',
            'whether_there_is_other_relevant_treatment_information'             => 'nullable',
//            'whether_there_is_other_relevant_treatment_information_secondary'   => 'nullable',
//            'attach_the_report_if_you_have_other_relevant'                      => 'nullable',
        ];
    }
}
