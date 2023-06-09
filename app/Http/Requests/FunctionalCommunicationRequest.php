<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FunctionalCommunicationRequest extends FormRequest
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
            "collection_date"                                                                                                             => 'required',
            "teacher_id"                                                                                                                  => 'required',
            "student_id"                                                                                                                  => 'required',
            "talk_too_loud_for_the_context"                                                                                               => 'nullable',
            "talk_too_loud_for_the_context_secondary"                                                                                     => 'nullable',
            "talk_too_quietly_for_the_context"                                                                                            => 'nullable',
            "talk_too_quietly_for_the_context_secondary"                                                                                  => 'nullable',
            "speech_is_hard_to_understand"                                                                                                => 'nullable',
            "speech_is_hard_to_understand_secondary"                                                                                      => 'nullable',
            "speech_calls_attention_of_itself"                                                                                            => 'nullable',
            "speech_calls_attention_of_itself_secondary"                                                                                  => 'nullable',
            "voice_is_too_hard"                                                                                                           => 'nullable',
            "voice_is_too_hard_secondary"                                                                                                 => 'nullable',
            "voice_is_too_low"                                                                                                            => 'nullable',
            "voice_is_too_low_secondary"                                                                                                  => 'nullable',
            "repeats_words_of_parts_of_word_when_talking"                                                                                 => 'nullable',
            "repeats_words_of_parts_of_word_when_talking_secondary"                                                                       => 'nullable',
            "talks_fast_causing_speech_to_be_unclear"                                                                                     => 'nullable',
            "talks_fast_causing_speech_to_be_unclear_secondary"                                                                           => 'nullable',
            "speech_sounds_monotone"                                                                                                      => 'nullable',
            "speech_sounds_monotone_secondary"                                                                                            => 'nullable',
            "speech_sounds_sign_song"                                                                                                     => 'nullable',
            "speech_sounds_sign_song_secondary"                                                                                           => 'nullable',
            "body_posture_is_too_rigid"                                                                                                   => 'nullable',
            "body_posture_is_too_rigid_secondary"                                                                                         => 'nullable',
            "body_posture_is_too_relaxed"                                                                                                 => 'nullable',
            "body_posture_is_too_relaxed_secondary"                                                                                       => 'nullable',
            "has_noticed_nervous_mannerisms"                                                                                              => 'nullable',
            "has_noticed_nervous_mannerisms_secondary"                                                                                    => 'nullable',
            "has_limited_use_if_gestures"                                                                                                 => 'nullable',
            "has_limited_use_if_gestures_secondary"                                                                                       => 'nullable',
            "demonstrates_unusual_facial_expressions"                                                                                     => 'nullable',
            "demonstrates_unusual_facial_expressions_secondary"                                                                           => 'nullable',
            "shows_little_variation_in_facial_expressions"                                                                                => 'nullable',
            "shows_little_variation_in_facial_expressions_secondary"                                                                      => 'nullable',
            "has_difficulty_understanding_facial_expressions_or_body_language"                                                            => 'nullable',
            "has_difficulty_understanding_facial_expressions_or_body_language_secondary"                                                  => 'nullable',
            "use_inappropriate_body_orientation_or_proximity_in_interaction"                                                              => 'nullable',
            "use_inappropriate_body_orientation_or_proximity_in_interaction_secondary"                                                    => 'nullable',
            "eye_contact_is_fleeting"                                                                                                     => 'nullable',
            "eye_contact_is_fleeting_secondary"                                                                                           => 'nullable',
            "does_not_use_eye_contact"                                                                                                    => 'nullable',
            "does_not_use_eye_contact_secondary"                                                                                          => 'nullable',
            "repeats_words_or_phrases_or_sentences"                                                                                       => 'nullable',
            "repeats_words_or_phrases_or_sentences_secondary"                                                                             => 'nullable',
            "Has_difficulties_using"                                                                                                      => 'nullable',
            "Has_difficulties_using_secondary"                                                                                            => 'nullable',
            "has_difficulty_understanding_or_using_humor_appropriately"                                                                   => 'nullable',
            "has_difficulty_understanding_or_using_humor_appropriately_secondary"                                                         => 'nullable',
            "demonstrate_literal_use_and_understanding_of_language"                                                                       => 'nullable',
            "demonstrate_literal_use_and_understanding_of_language_secondary"                                                             => 'nullable',
            "has_difficulty_with_multiple_meaning_words"                                                                                  => 'nullable',
            "has_difficulty_with_multiple_meaning_words_secondary"                                                                        => 'nullable',
            "uses_rote_or_recital_language"                                                                                               => 'nullable',
            "uses_rote_or_recital_language_secondary"                                                                                     => 'nullable',
            "demonstrate_idiosyncratic_word_use"                                                                                          => 'nullable',
            "demonstrate_idiosyncratic_word_use_secondary"                                                                                => 'nullable',
            "has_a_large_vocabulary_with_little_comprehension"                                                                            => 'nullable',
            "has_a_large_vocabulary_with_little_comprehension_secondary"                                                                  => 'nullable',
            "reverses_personal_pronouns"                                                                                                  => 'nullable',
            "reverses_personal_pronouns_secondary"                                                                                        => 'nullable',
            "lacks_variety_in_use_of_sentence_structure"                                                                                  => 'nullable',
            "lacks_variety_in_use_of_sentence_structure_secondary"                                                                        => 'nullable',
            "leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message"           => 'nullable',
            "leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message_secondary" => 'nullable',
            "has_difficulties_relaying_information_in_a_sequential_way"                                                                   => 'nullable',
            "has_difficulties_relaying_information_in_a_sequential_way_secondary"                                                         => 'nullable',
            "says_too_much_or_too_little"                                                                                                 => 'nullable',
            "says_too_much_or_too_little_secondary"                                                                                       => 'nullable',
            "is_slow_in_answering_questions_in_class_or_work"                                                                             => 'nullable',
            "is_slow_in_answering_questions_in_class_or_work_secondary"                                                                   => 'nullable',
            "has_difficulty_understanding_what_to_do"                                                                                     => 'nullable',
            "has_difficulty_understanding_what_to_do_secondary"                                                                           => 'nullable',
            "often_asks_for_repeats_or_explanations_of_a_direction_or_assignment"                                                         => 'nullable',
            "often_asks_for_repeats_or_explanations_of_a_direction_or_assignment_secondary"                                               => 'nullable',
            "does_the_wrong_thing_after_clear_directions_have_been_given"                                                                 => 'nullable',
            "does_the_wrong_thing_after_clear_directions_have_been_given_secondary"                                                       => 'nullable',
            "doesnt_appear_to_watch_what_other_students_are_doing_for_information"                                                        => 'nullable',
            "doesnt_appear_to_watch_what_other_students_are_doing_for_information_secondary"                                              => 'nullable',
            "doesnt_seek_help_in_following_directions_when_it_is_needed"                                                                  => 'nullable',
            "doesnt_seek_help_in_following_directions_when_it_is_needed_secondary"                                                        => 'nullable',
            "appears_to_have_difficulty_understanding_tone_of_voice"                                                                      => 'nullable',
            "appears_to_have_difficulty_understanding_tone_of_voice_secondary"                                                            => 'nullable',
            "has_difficulty_comprehending_questions"                                                                                      => 'nullable',
            "has_difficulty_comprehending_questions_secondary"                                                                            => 'nullable',
            "has_an_excellent_rote_memory_with_poor_comprehension"                                                                        => 'nullable',
            "has_an_excellent_rote_memory_with_poor_comprehension_secondary"                                                              => 'nullable',
            "often_looks_away_or_‘day_dreams_during_lectures"                                                                             => 'nullable',
            "often_looks_away_or_‘day_dreams_during_lectures_secondary"                                                                   => 'nullable',
            "has_difficulty_remembering_orally_presented_information"                                                                     => 'nullable',
            "has_difficulty_remembering_orally_presented_information_secondary"                                                           => 'nullable',
            "has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story"                                                => 'nullable',
            "has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story_secondary"                                      => 'nullable',
            "demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members"                                                 => 'nullable',
            "demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members_secondary"                                       => 'nullable',
            "has_difficulty_shifting_attention"                                                                                           => 'nullable',
            "has_difficulty_shifting_attention_secondary"                                                                                 => 'nullable',
            "has_difficulty_with_joint_attention"                                                                                         => 'nullable',
            "has_difficulty_with_joint_attention_secondary"                                                                               => 'nullable',
            "focuses_on_apparently_irrelevant_information_or_details"                                                                     => 'nullable',
            "focuses_on_apparently_irrelevant_information_or_details_secondary"                                                           => 'nullable',
            "uses_delayed_r_immediate_echolalia"                                                                                          => 'nullable',
            "uses_delayed_r_immediate_echolalia_secondary"                                                                                => 'nullable',
            "repeats_passages_from_movie_songs_commercials_cartoons_etc"                                                                  => 'nullable',
            "repeats_passages_from_movie_songs_commercials_cartoons_etc_secondary"                                                        => 'nullable',
            "does_not_responds_to_his_name"                                                                                               => 'nullable',
            "does_not_responds_to_his_name_secondary"                                                                                     => 'nullable',
            "responds_to_his_name_inconsistently"                                                                                         => 'nullable',
            "responds_to_his_name_inconsistently_secondary"                                                                               => 'nullable',
            "inconsistently_attends_to_verbal_stimuli"                                                                                    => 'nullable',
            "inconsistently_attends_to_verbal_stimuli_secondary"                                                                          => 'nullable',
            "response_to_speech_is_delayed"                                                                                               => 'nullable',
            "response_to_speech_is_delayed_secondary"                                                                                     => 'nullable',
            "protective_reactions"                                                                                                        => 'nullable',
            "equilibrium_reaction"                                                                                                        => 'nullable',
            "demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests"                                           => 'nullable',
            "demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests_secondary"                                 => 'nullable',
            "looks_down_or_away_when_talking"                                                                                             => 'nullable',
            "looks_down_or_away_when_talking_secondary"                                                                                   => 'nullable',
            "makes_off_topic_comments"                                                                                                    => 'nullable',
            "makes_off_topic_comments_secondary"                                                                                          => 'nullable',
            "has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics"                         => 'nullable',
            "has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics_secondary"               => 'nullable',
            "has_difficulty_initiating_conversations"                                                                                     => 'nullable',
            "has_difficulty_initiating_conversations_secondary"                                                                           => 'nullable',
            "has_difficulty_initiating_pay"                                                                                               => 'nullable',
            "has_difficulty_initiating_pay_secondary"                                                                                     => 'nullable',
            "has_hard_time_sustaining_topic_of_conversation"                                                                              => 'nullable',
            "has_hard_time_sustaining_topic_of_conversation_secondary"                                                                    => 'nullable',
            "has_difficulty_initiating_play"                                                                                              => 'nullable',
            "has_difficulty_initiating_play_secondary"                                                                                    => 'nullable',
            "has_a_hard_time_sustaining_topic_of_conversation"                                                                            => 'nullable',
            "has_a_hard_time_sustaining_topic_of_conversation_secondary"                                                                  => 'nullable',
            "has_a_hard_time_sustaining_play_with_others"                                                                                 => 'nullable',
            "has_a_hard_time_sustaining_play_with_others_secondary"                                                                       => 'nullable',
            "demonstrate_problems_terminating_a_conversation"                                                                             => 'nullable',
            "demonstrate_problems_terminating_a_conversation_secondary"                                                                   => 'nullable',
            "has_difficulty_understanding_the_perspective_of_others"                                                                      => 'nullable',
            "has_difficulty_understanding_the_perspective_of_others_secondary"                                                            => 'nullable',
            "has_trouble_responding_in_an_empathetic_manner"                                                                              => 'nullable',
            "has_trouble_responding_in_an_empathetic_manner_secondary"                                                                    => 'nullable',
            "interrupts_the_conversation_of_others"                                                                                       => 'nullable',
            "interrupts_the_conversation_of_others_secondary"                                                                             => 'nullable',
            "has_difficulty_adapting_language_of_others"                                                                                  => 'nullable',
            "has_difficulty_adapting_language_of_others_secondary"                                                                        => 'nullable',
            "has_difficulty_adapting_language_to_audience_or_setting"                                                                     => 'nullable',
            "has_difficulty_adapting_language_to_audience_or_setting_secondary"                                                           => 'nullable',
            "talks_too_much_in_a_conversation_with_peers_or_adults"                                                                       => 'nullable',
            "talks_too_much_in_a_conversation_with_peers_or_adults_secondary"                                                             => 'nullable',
            "talks_too_little_in_a_conversation_with_peers_or_adults"                                                                     => 'nullable',
            "talks_too_little_in_a_conversation_with_peers_or_adults_secondary"                                                           => 'nullable',
            "bringing_up_the_same_topic_repeatedly"                                                                                       => 'nullable',
            "bringing_up_the_same_topic_repeatedly_secondary"                                                                             => 'nullable',
            "gives_recitative_or_redundant_information"                                                                                   => 'nullable',
            "gives_recitative_or_redundant_information_secondary"                                                                         => 'nullable',
            "demonstrates_difficulty_taking_turns"                                                                                        => 'nullable',
            "demonstrates_difficulty_taking_turns_secondary"                                                                              => 'nullable',
            "does_not_use_language_to_regulate_others_action"                                                                             => 'nullable',
            "does_not_use_language_to_regulate_others_action_secondary"                                                                   => 'nullable',
            "has_difficulty_with_greetings_or_departures"                                                                                 => 'nullable',
            "has_difficulty_with_greetings_or_departures_secondary"                                                                       => 'nullable',
            "has_difficulty_clarifying"                                                                                                   => 'nullable',
            "has_difficulty_clarifying_secondary"                                                                                         => 'nullable',
            "has_difficulty_asking_for_clarification"                                                                                     => 'nullable',
            "has_difficulty_asking_for_clarification_secondary"                                                                           => 'nullable',
            "has_difficulty_asking_question"                                                                                              => 'nullable',
            "has_difficulty_asking_question_secondary"                                                                                    => 'nullable',
            "use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction"                                                     => 'nullable',
            "use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction_secondary"                                           => 'nullable',
            "significant_differences_between_interaction_skills_with_peers_vs_adults"                                                     => 'nullable',
            "significant_differences_between_interaction_skills_with_peers_vs_adults_secondary"                                           => 'nullable',
            "does_not_evoke_attention_appropriately"                                                                                      => 'nullable',
            "does_not_evoke_attention_appropriately_secondary"                                                                            => 'nullable',
            "difficulty_comprehending_social_rules"                                                                                       => 'nullable',
            "difficulty_comprehending_social_rules_secondary"                                                                             => 'nullable',
            "difficulty_asking_for_and_accepting_help"                                                                                    => 'nullable',
            "difficulty_asking_for_and_accepting_help_secondary"                                                                          => 'nullable',
            "protest_in_inappropriate_or_atypical_ways"                                                                                   => 'nullable',
            "protest_in_inappropriate_or_atypical_ways_secondary"                                                                         => 'nullable',
            "does_not_ask_permission_when_appropriate_to_do_so"                                                                           => 'nullable',
            "does_not_ask_permission_when_appropriate_to_do_so_secondary"                                                                 => 'nullable',
            "is_unaware_of_his_impact_on_others"                                                                                          => 'nullable',
            "is_unaware_of_his_impact_on_others_secondary"                                                                                => 'nullable',
            "demonstrates_limited_range_of_communicative_functions"                                                                       => 'nullable',
            "demonstrates_limited_range_of_communicative_functions_secondary"                                                             => 'nullable',
            "pre_suppositional_skills_are_weak"                                                                                           => 'nullable',
            "pre_suppositional_skills_are_weak_secondary"                                                                                 => 'nullable',
            "appear_to_have_difficulty_judging_listener_interest"                                                                         => 'nullable',
            "appear_to_have_difficulty_judging_listener_interest_secondary"                                                               => 'nullable',
            "appears_more_interested_in_objectives_than_people"                                                                           => 'nullable',
            "appears_more_interested_in_objectives_than_people_secondary"                                                                 => 'nullable',
            "does_not_establish_joint_focus"                                                                                              => 'nullable',
            "does_not_establish_joint_focus_secondary"                                                                                    => 'nullable',
            "does_not_anticipate_social_approach_of_other"                                                                                => 'nullable',
            "does_not_anticipate_social_approach_of_other_secondary"                                                                      => 'nullable',
            "shows_little_awareness_of_peers_of_have_atypical_interactions"                                                               => 'nullable',
            "shows_little_awareness_of_peers_of_have_atypical_interactions_secondary"                                                     => 'nullable',
            "does_not_observe_peers_with_curiosity"                                                                                       => 'nullable',
            "does_not_observe_peers_with_curiosity_secondary"                                                                             => 'nullable',
            "has_difficulty_with_parallel_play"                                                                                           => 'nullable',
            "has_difficulty_with_parallel_play_secondary"                                                                                 => 'nullable',
            "has_difficulty_with_associative_play"                                                                                        => 'nullable',
            "has_difficulty_with_associative_play_secondary"                                                                              => 'nullable',
            "has_difficulty_with_cooperative_play"                                                                                        => 'nullable',
            "has_difficulty_with_cooperative_play_secondary"                                                                              => 'nullable',
            "laughs_for_no_apparent_reason"                                                                                               => 'nullable',
            "laughs_for_no_apparent_reason_secondary"                                                                                     => 'nullable',
            "cries_for_no_apparent_reason"                                                                                                => 'nullable',
            "cries_for_no_apparent_reason_secondary"                                                                                      => 'nullable',
            "has_difficulty_sharing"                                                                                                      => 'nullable',
            "has_difficulty_sharing_secondary"                                                                                            => 'nullable',
            "does_thing_s_for_himself_without_interacting_with_others"                                                                    => 'nullable',
            "does_thing_s_for_himself_without_interacting_with_others_secondary"                                                          => 'nullable',
            "has_limited_imaginative_or_pretending_play"                                                                                  => 'nullable',
            "has_limited_imaginative_or_pretending_play_secondary"                                                                        => 'nullable',
            "demonstrate_difficulty_with_cause_and_effect"                                                                                => 'nullable',
            "demonstrate_difficulty_with_cause_and_effect_secondary"                                                                      => 'nullable',
            "play_appears_ritualistic_or_recitation_or_rote"                                                                              => 'nullable',
            "play_appears_ritualistic_or_recitation_or_rote_secondary"                                                                    => 'nullable',
            "does_not_response_appropriately_to_others_distress"                                                                          => 'nullable',
            "does_not_response_appropriately_to_others_distress_secondary"                                                                => 'nullable',
            "lack_of_joint_attention_such_as_showing_and_pointing"                                                                        => 'nullable',
            "lack_of_joint_attention_such_as_showing_and_pointing_secondary"                                                              => 'nullable',
        ];
    }
}
