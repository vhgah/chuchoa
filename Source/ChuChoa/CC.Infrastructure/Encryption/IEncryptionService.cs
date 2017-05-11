
namespace CC.Infrastructure.Encryption
{
    /// <summary>
    /// The EncryptionService interface.
    /// </summary>
    public interface IEncryptionService
    {
        /// <summary>
        /// The encrypt.
        /// </summary>
        /// <param name="value">
        /// The value.
        /// </param>
        /// <returns>
        /// The <see cref="byte[]"/>.
        /// </returns>
        byte[] Encrypt(string value);
    }
}