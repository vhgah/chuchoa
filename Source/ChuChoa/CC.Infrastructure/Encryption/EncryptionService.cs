
using System.Security.Cryptography;

namespace CC.Infrastructure.Encryption
{
    /// <summary>
    /// The default encryption service.
    /// </summary>
    public class EncryptionService : IEncryptionService
    {
        /// <summary>
        /// Encrypts the specified value.
        /// </summary>
        /// <param name="value">
        /// The value.
        /// </param>
        /// <returns>
        /// The <see cref="byte[]"/>.
        /// </returns>
        public byte[] Encrypt(string value)
        {
            if (!string.IsNullOrEmpty(value))
            {
                var sha = new SHA1CryptoServiceProvider();
                return sha.ComputeHash(System.Text.Encoding.ASCII.GetBytes(value));
            }

            return new byte[] {};
        }
    }
}