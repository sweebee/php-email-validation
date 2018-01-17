<?php
    namespace wiebenieuwenhuis\Validation;

    class EmailValidator {

        /**
         * Validate the email address
         *
         * @param $email
         *
         * @return bool
         */
        public function validate($email)
        {
            // Validate the email as string
            if( ! $this->validateString($email) ){
                return false;
            }

            // Validate the domain if it exists
            if( ! $this->validateDomain($email) ){
                return false;
            }

            // Email is valid
            return true;
        }

        /**
         * Validate the string
         *
         * @param $email
         *
         * @return mixed
         */
        private function ValidateString($email)
        {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }

        /**
         * Check if the domain exists
         *
         * @param $email
         *
         * @return bool
         */
        private function ValidateDomain($email) {
            list($user,$domain) = explode('@',$email);
            return checkdnsrr($domain,'MX') || checkdnsrr($domain,'A');
        }

    }