<?php
/**
 * Copyright 2017 Infonet Hungary, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Infonet Hungary.
 *
 * As with any software that integrates with the ingatlanpont.com platform, your use
 * of this software is subject to the iP Developer Principles and
 * Policies [http://developers.ingatlanpont.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */
 
 /* Enumerations for ingatlanpont API communication */

abstract class IPEnvironment
{
    const Test = "test";
    const Prod = "prod";
}
abstract class QRCodeSize
{
    const Small = "Small";
    const Normal = "Normal";
    const Large = "Large";
}
abstract class UILocale
{
    const HU = "hu-HU";
    const EN = "en-US";
    const DE = "de-DE";
    const SL = "sl-SL";
    const SK = "sk-SK";
    const FR = "fr-FR";
    
}