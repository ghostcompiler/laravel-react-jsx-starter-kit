/**
 * Auth type definitions used by chisel feature toggles.
 */

/* @chisel-2fa */
/** @typedef {{ two_factor_enabled?: boolean }} TwoFactorUserFields */
/* @end-chisel-2fa */

/* @chisel-passkeys */
/**
 * @typedef {Object} Passkey
 * @property {number} id
 * @property {string} name
 * @property {string|null} authenticator
 * @property {string} created_at_diff
 * @property {string|null} last_used_at_diff
 */
/* @end-chisel-passkeys */

/* @chisel-2fa */
/** @typedef {{ svg: string, url: string }} TwoFactorSetupData */
/** @typedef {{ secretKey: string }} TwoFactorSecretKey */
/* @end-chisel-2fa */
