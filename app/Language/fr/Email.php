<?php

/**
 * Email language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'La méthode de validation de l\'email n\'accepte que les tableaux.',
   'invalidAddress'       => 'Adresse email invalide : {0}',
   'attachmentMissing'    => 'Impossible de localiser le ficher joint suivant : {0}',
   'attachmentUnreadable' => 'Impossible d\'ouvrir ce fichier joint : {0}',
   'noFrom'               => 'Impossible d\'envoyer un email sans en-tête "From".',
   'noRecipients'         => 'Vous devez spécifier des destinataires : To, Cc, ou Bcc',
   'sendFailurePHPMail'   => 'Impossible d\'envoyer des emails avec la fonction mail() de PHP. Votre serveur n\'est peut-être pas configuré pour pouvoir utiliser cette méthode.',
   'sendFailureSendmail'  => 'Impossible d\'envoyer des emails avec la méthode Sendmail de PHP. Votre serveur n\'est peut-être pas configuré pour pouvoir utiliser cette méthode.',
   'sendFailureSmtp'      => 'Impossible d\'envoyer des emails avec la méthode SMTP de PHP. Votre serveur n\'est peut-être pas configuré pour pouvoir utiliser cette méthode.',
   'sent'                 => 'Votre message a bien été envoyé avec le protocole suivant : {0}',
   'noSocket'             => 'Impossible d\'ouvrir un socket avec Sendmail. Veuillez vérifier la configuration de votre environnement.',
   'noHostname'           => 'Vous n\'avez pas spécifié de nom d\'hôte SMTP.',
   'SMTPError'            => 'L\'erreur SMTP suivante s\'est produite : {0}',
   'noSMTPAuth'           => 'Erreur : Vous devez spécifier un nom d\'utilisateur et un mot de passe SMTP.',
   'failedSMTPLogin'      => 'Échec lors de l\'envoi de la commande AUTH LOGIN. Erreur : {0}',
   'SMTPAuthUsername'     => 'Impossible d\'identifier le nom d\'utilisateur. Erreur : {0}',
   'SMTPAuthPassword'     => 'Impossible d\'identifier le mot de passe. Erreur : {0}',
   'SMTPDataFailure'      => 'Impossible d\'envoyer les données : {0}',
   'exitStatus'           => 'Code de retour : {0}',
];
