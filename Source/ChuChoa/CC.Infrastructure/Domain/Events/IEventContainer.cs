
using System.Collections;
using System.Collections.Generic;

namespace CC.Infrastructure.Domain.Events
{
    /// <summary>
    /// The EventContainer interface.
    /// </summary>
    public interface IEventContainer
    {
        /// <summary>
        /// The handlers.
        /// </summary>
        /// <param name="domainEvent">
        /// The domain event.
        /// </param>
        /// <typeparam name="T">
        /// </typeparam>
        /// <returns>
        /// The <see cref="IEnumerable"/>.
        /// </returns>
        IEnumerable<IDomainEventHandler<T>> Handlers<T>(T domainEvent)
            where T : IDomainEvent;
    }
}